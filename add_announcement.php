    <?php include("header.inc.php"); ?>
    
    <script type="text/javascript">
      //<!--
      function validateAnnoucement() {
        
        var retval = true;
        
        if (document.forms[0].titleField.value == '') {
          alert("Cannot post without a title!");
          retval = false;
        }
        
        if (document.forms[0].titleField.value.length > 35) {
          alert("Title field can only be 35 characters!");
          retval = false;
        }
        
        if (document.forms[0].bodyField.value == '' || document.forms[0].bodyField.value == 'Enter the Announcement here.') {
          alert("Cannot post with an empty body (or the default text)");
          retval = false;
        }
        
        if (document.forms[0].bodyField.value.match('<script')) {
          alert("No scrpits are allowed in the post!");
          retval = false;
        }
        
        return retval;
      }
      //-->
    </script>
    
    <div id="subHeader"> <!-- For easy determination of current page, without the nasty PHP/JS -->
      Add New Announcement
    </div>
    <div id="addAnnouncementContent"> <!-- Start Content -->
    
      <?php 
      
      if ($accessLevel >= 3) {
        
        if ($_POST['titleField'] != null && $_POST['preview'] != 'on') {
          
          // Connecting, selecting database
          $link = mysql_connect("localhost", 'eshields', 'secure-M3')
             or die('Could not connect: ' . mysql_error());
          mysql_select_db('freedomschoice') or die('Could not select database');
          
          // Performing SQL query
          $query = "INSERT INTO announcements ( id, date, title, poster, body ) VALUES('', '" . date("Y-m-d h:m:s") . "', '" . addslashes($_POST['titleField']) . "', '" . $_SESSION['username'] . "', '" . addslashes($_POST['bodyField']) . "');";
          $result = mysql_query($query) or die('Query failed: ' . mysql_error());
          
          // Reorder the table so that the news will show up in reverse submission order
          $query = "ALTER TABLE announcements ORDER BY id DESC";
          $result = mysql_query($query) or die('Query failed: ' . mysql_error());      
          
          // Closing connection
          mysql_close($link);
    
          ?>
          <p>Your announcement was submitted successfully.  Please click <a href="<?php echo $path; ?>/index.php">here</a> to return to the main page.</p>
          <?php
    
        } else { 
          
          if ($_POST['preview'] == 'on') {
            ?><br /><strong>Preview:</strong>
            <blockquote>
              <h4><?php echo date("m-d-Y") . ' - ' . $_POST['titleField'] . ' - Posted by ' . $_SESSION['username']; ?></h4>
              <span><?php echo $_POST['bodyField']; ?></span>
            </blockquote><?php
            
          } ?>
        
          <p>Use the following form to submit a new announcement.  Use HTML for better formatting.  Due to the way HTML is formatted, just hitting enter will not produce line breaks in what you type.  You must use either the paragraph or line break tags shown below.  Place text between the starting (without a "/") tag and ending (with a "/") tag.  If you've never used HTML before, this can be confusing.  <strong>Please make use of the Preview option to test your post before posting!  You will not be able to delete a post after it is submitted!</strong></p>
          <p>The most useful tags are:</p>
          <ul>
            <li><strong>&lt;p&gt;</strong> and <strong>&lt;/p&gt;</strong> - This will create a paragraph</li>
            <li><strong>&lt;br /&gt;</strong> - This will produce the result you'd expect from hitting the enter key in the text box.
            <li><strong>&lt;ul&gt;</strong>, <strong>&lt;li&gt;</strong>, <strong>&lt;/ul&gt;</strong>, and <strong>&lt;/li&gt;</strong> - This will create an item list (like the one used here).  <br />For example:  The code for the list used here is <br /><strong>&lt;ul&gt;&lt;li&gt;item 1&lt;/li&gt;&lt;li&gt;item 2&lt;/li&gt;&lt;li&gt;item 3&lt;/li&gt;&lt;/ul&gt;</strong><br />These can be nested as well, if desired.</li>
            <li>If a numbered list is desired instead, replace <strong>&lt;ul&gt;</strong> and <strong>&lt;/ul&gt;</strong> with <strong>&lt;ol&gt;</strong> and <strong>&lt;/ol&gt;</strong></p>
          </ul>
          <p>If you wish to use other tags, please look them up in a reference document (such as the one at <a href="javascript: void(0);" onclick="window.open('http://www.w3schools.com/tags/default.asp', 'W3schools');">W3schools</a>).  Javascript is not allowed.</p>
          <p>The title may not be more than 35 characters long.</p>
          <form action="" method="post" onsubmit="return validateAnnoucement()"><div>
            <table>
              <tr>
                <td>Title:</td>
                <td><input id="titleField" name="titleField" type="text" value="<?php echo $_POST['titleField'] ?>" /></td>
              </tr>
              <tr>
                <td>Body:</td>
                <td><textarea onfocus="if (document.getElementById('bodyField').value == 'Enter the Announcement here.') { document.getElementById('bodyField').value = '' }" id="bodyField" name="bodyField" rows="10" cols="80"><?php echo $_POST['bodyField'] != null ? $_POST['bodyField'] : 'Enter the Announcement here.'; ?></textarea></td>
              </tr>
            </table>
            <p style="text-align: left; margin: 0px;">Preview before posting: <input id="preview" name="preview" type="checkbox" checked="checked" /></p>
            <p style="text-align: center; margin: 0px;"><input id="submitButton" type="submit" value="Submit" /></p>
          </div></form>
          
        <?php
        } // End if - else statement
      } else {
        ?><p class="accessDenied">You do not have sufficient permission to access this page.  If you have gained a rank and think you may now qualify, please contact Ham via the link below.  Thank you.</p><?php
      } // End if - else statements
      ?>
      
    </div> <!-- End Content -->
    
    <?php include("footer.inc.php"); ?>
