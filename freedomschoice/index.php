    <?php include("header.inc.php"); ?>
    
    <script type="text/javascript">
      //<!--
      /* Toggle the displaying of a node with id <id> */
      function toggleText(id) {
        displayMode = document.getElementById(id).style.display;
        if ( displayMode == "none" ) {
          document.getElementById(id).style.display = "";
        } else {
          document.getElementById(id).style.display = "none";
        } // End if - else statements
      }
      //-->
    </script>
    
    <div id="subHeader"> <!-- For easy determination of current page, without the nasty PHP/JS -->
      Welcome Home
    </div>
    <div id="indexContent"> <!-- Start Index Content -->
      <?php
        if ($_GET['loginmessage'] == true) {
          ?><h4 style="text-align: center; font-weight: bold; color: #AA0000">You have been logged in successfully!</h4><?php
        } else if ($_GET['logoutmessage'] == true) {
          ?><h4 style="text-align: center; font-weight: bold; color: #AA0000">You have been logged out successfully!</h4><?php
        } // End if - else statements
      ?>
      <h3><span style="color: #FFF; font-size: 8pt; cursor: pointer;" onclick="toggleText('overviewMessage')">Click Here</span> For an Overview of the Guild!</h3>
      <div id="overviewMessage" style="display: none"><p>If you're new to the guild or you just want a nice concise overview of the guild, then please check out the <a href="http://www.wowwiki.com/freedoms_choice#Quick_Info">WoWwiki webpage</a>.  It has a very nice overview of everything from guild history to the guild banks in an easy to follow page.</p>
      <p>Once you've looked that over, please check out the <a href="about/charter.php">guild charter</a>.  Everyone needs to read it at least once!  And besides... Tren when through all the trouble to write it, at least we could humor him... :P</p></div>

      
      <h2 style="text-align: center; margin: 0px;">News and Anouncements (In reverse date order)</h2>
      <h4 style="text-align: center; margin: 0px;">Click on a post to view it's contents.  Click again to collapse it.</h4>
      <?php echo $accessLevel >= 3 ? "<p style='text-align:center; font-size: 75%;'><a href='$path/add_announcement.php'>Add a new news article or annoucement</a></p>" : "";?>
      
      <?php
      // Connecting, selecting database
      $link = mysql_connect("localhost", 'eshields', 'secure-M3')
         or die('Could not connect: ' . mysql_error());
      mysql_select_db('freedomschoice') or die('Could not select database');
      
      // Performing SQL query
      $query = "SELECT * FROM announcements";
      $result = mysql_query($query) or die('Query failed: ' . mysql_error());
      
      $newsCounter = 0;
      
      // Print the announcements to the page
      while ($line = mysql_fetch_assoc($result)) {
        
        if ($newsCounter <= 7) {
        
          // Parse the returned date, so as to extract it in a more farmiliar form
          preg_match("/(\d{4})-(\d{2})-(\d{2})/", $line['date'], $match);
          
          ?><blockquote>
            <h4 style="cursor: pointer; margin-bottom: 0px;" onclick="toggleText('<?php echo "id" . $line['id'] ?>')"><?php echo "$match[2]-$match[3]-$match[1]". ' - ' . $line['title'] . ' - Posted by ' . $line['poster']; ?></h4>
            <div id="<?php echo "id" . $line['id'] ?>" style="display: none;"><?php echo $line['body']; ?></div>
          </blockquote><?php
          
          // Preserve announcement id for latter use
          $lineID[] = "id" . $line['id'];
          
          $newsCounter++;
        } 
        
        if ($newsCounter == 7) {
          break;
        }
        
      } // End while loop
      
      if ($newsCounter === 7) {
      	?><div id="toggleMoreNews" style="display:; cursor: pointer; color: #DADADA;" onclick="toggleText('moreNews'); document.getElementById('toggleMoreNews').style.display = 'none';">Click here to see all announcement entries</div><div id="moreNews" style="display: none"><?php
      
					// Print the announcements to the page
					while ($line = mysql_fetch_assoc($result)) {
						
						// Parse the returned date, so as to extract it in a more farmiliar form
						preg_match("/(\d{4})-(\d{2})-(\d{2})/", $line['date'], $match);
						
						?><blockquote>
							<h4 style="cursor: pointer; margin-bottom: 0px;" onclick="toggleText('<?php echo "id" . $line['id'] ?>')"><?php echo "$match[2]-$match[3]-$match[1]". ' - ' . $line['title'] . ' - Posted by ' . $line['poster']; ?></h4>
							<div id="<?php echo "id" . $line['id'] ?>" style="display: none;"><?php echo $line['body']; ?></div>
						</blockquote><?php
						
						// Preserve announcement id for latter use
						$lineID[] = "id" . $line['id'];
						
					} // End while loop
	
				?></div><?php
      
      } // End if statement
      
      // Free resultset
      mysql_free_result($result);

      // Closing connection
      mysql_close($link);
      ?>

      <script type="text/javascript">
        //<!--
        toggleText('<?php echo reset($lineID) ?>');
        //-->
      </script>
      
    </div> <!-- End Index Content -->
    
    <?php include("footer.inc.php"); ?>
