    <?php include("../header.inc.php"); ?>
    <div id="subHeader"> <!-- For easy determination of current page, without the nasty PHP/JS -->
      Change Password Utility
    </div>
    <div id="passwordContent"> <!-- Start Index Content -->
      <?php
        if ($accessLevel >= 1) {
          
            ?><p>Use this form to change your password.  As I will be able to read them when looking at the database, please do not use anything for your password that you would use for sensitive information!  I would not abuse such information, but you deserve fair warning.</p>
            <form action="" method="post" onsubmit="return validatePassChange()"><div id="passForm" style="display: none">
              <div id="failedAttempt" style="display: none">
                Change Attempt Failed!<br />
                <span style="font-weight: normal;">This most likely means you typed your password incorrectly, your new password confirmation did not match, or you entered nothing for a new password.</span>
              </div>
              <table class="passwordTable" cellpadding="1" cellspacing="0" style="border: 1px solid #000000; text-align: center;">
                <tr>
                  <td class="label">
                    <span style="font-weight: bold;">Old Password:</span>
                  </td>
                  <td class="input">
                    <input class="inputTextBox" id="oldPass" type="password" name="oldPass" value="" style="width:150px; margin-top: 5px;" />
                  </td>
                </tr>
                <tr>
                  <td class="label">
                    <span style="font-weight: bold;">New Password:</span>
                  </td>
                  <td class="input">
                    <input class="inputTextBox" id="newPass" type="password" name="newPass" style="width:150px;" /> 
                  </td>
                </tr>
                <tr>
                  <td class="label">
                    <span style="font-weight: bold;">Confirm New Password:</span>
                  </td>
                  <td class="input">
                    <input class="inputTextBox" id="newPassConfirm" type="password" name="newPassConfirm" style="width:150px;" /> 
                  </td>
                </tr>
                <tr>
                  <td colspan="2">
                    <input class="standardButton" id="submit" type="submit" name="submit" value="   Submit   " />
                  </td>
                </tr>
              </table>
            </div></form><?php
           
           if ($_POST['oldPass'] != null) {
            
            // Connecting, selecting database
#            $link = mysql_connect('localhost', 'deathtoll2001', '5#dumb')
            $link = mysql_connect("sqlc40b.carrierzone.com", 'deathtoll2001', '5#dumb')
               or die('Could not connect: ' . mysql_error());
            mysql_select_db('deathtoll2001') or die('Could not select database');
            
            // Grab the user's password from the database
            $query = "SELECT password FROM wow_weblogin WHERE CONVERT( username USING utf8 ) = '" . $_SESSION['username'] . "';";
            $result = mysql_query($query) or die('Query failed: ' . mysql_error());
            
            $result = mysql_fetch_assoc($result);

            if ( ($_POST['oldPass'] == $result['password'])
              && ($_POST['newPass'] == $_POST['newPassConfirm'])
              && ($_POST['newPass'] != null)
               ) {
              
              // Performing SQL query
              $query = "UPDATE wow_weblogin SET password = '" . $_POST['newPassConfirm'] . "' WHERE CONVERT( username USING utf8 ) = '" . $_SESSION['username'] . "';";
              $result = mysql_query($query) or die('Query failed: ' . mysql_error());
              
            ?>
            <p style="text-align: center">Your password was changed successfully.  Please click <a href="<?php echo $path; ?>/index.php">here</a> to return to the main page.</p>
            <?php
      
            } else {
              
              ?><script type="text/javascript">
                document.getElementById('passForm').style.display = "";
                document.getElementById('failedAttempt').style.display = "";
              </script><?php
              
            } // End if - else statements
              
            // Closing connection
            mysql_close($link);
      
           } else {
        
              ?><script type="text/javascript">
                document.getElementById('passForm').style.display = "";
              </script><?php
              
          } // End if - else statement
        } else {
          ?><p class="accessDenied">You must be logged in to alter your password.  You can login <a href="<?php echo $path ?>/login.php">here</a>.</p><?php
        } // End if - else statements
      ?>
    </div> <!-- End Index Content -->
    <?php include("../footer.inc.php"); ?>
