<?php include("header.inc.php"); ?>
  <div>
    <h1 style="color: red; text-align: center;">Please wait while you are logged in</h1>
    <?php
      $allowLogin = false;
      $userMatch = false;
      
      // Connecting, selecting database
      $link = mysql_connect("localhost", 'eshields', 'secure-M3')
         or die('Could not connect to user database: ' . mysql_error());
      mysql_select_db('freedomschoice') or die('Could not select database');
      
      // Performing SQL query
      $query = "SELECT * FROM weblogin";
      $result = mysql_query($query) or die('Query failed: ' . mysql_error());
      
      // Determine the users login status and access level
      while ($line = mysql_fetch_assoc($result)) {
        if (strtolower($line['username']) == strtolower($_POST['username']) && $line['password'] == $_POST['password']) {
          $tempEmail = $line['email'];
          $tempAccess = $line['accessLevel'];
          $allowLogin = true;
          
          // Free resultset
          mysql_free_result($result);
    
          // Update the lastLogin stat
          $query = "UPDATE weblogin SET lastLogin = '" . date("Y-m-d h:m:s") . "' WHERE CONVERT( username USING utf8 ) = '" . strtolower($_POST['username']) . "';";
          $result = mysql_query($query) or die('Query failed: ' . mysql_error());
          
          break;

        } else if (strtolower($line['username']) == strtolower($_POST['username'])) { // For possible expansion
          $userMatch = true;
          break;
        } else {
          continue;
        } // End if - else if - else statements
      } // End while loop
      
      // Closing connection
      mysql_close($link);
    
      // Check the authentication results
      //if($rv != "") { // authentication failed
      if (!$allowLogin) {
        
        // Set the login variables
        $_SESSION['accessLevel'] = 0;
        
      } else { // Authentication Succeded
        
        // Set the cache expiration and garbage collection timers
        ini_set("session.cache_expire","360"); // default is 180, which is 3 hours... 
        ini_set("session.gc_maxlifetime","10800"); // default is 1440, which is only 24 minutes 
        
        // Create the session
        session_start();
        
        // Ensure that no previous session data is saved (like if the browser was closed rather than logging out)
        $_SESSION = array();
        
        // Start the new data
        $_SESSION['accessLevel'] = $tempAccess;
        $_SESSION['email'] = $tempEmail;
        $_SESSION['username'] = $_POST['username'];
        
        // Determine if the user wants their username remembered
        if ($_POST['remember'] == 'on') { 
          setcookie('username', $_POST['username'], time()+60*60*24*356); // Set the remember eid cookie to expire in one year
        } else {
          setcookie('username', "", time()-3600);
        } // End if - else statement
      
      } // End if - else statement
      
      // Redirect the browser
      if ($allowLogin == true) {
        ?>
        <script type="text/javascript">
          //<!--
            <?php echo "document.location = '" . $_POST['referer'] . "';"; ?>
          //-->
        </script>
        <?php
      } else {
        ?>
        <script type="text/javascript">
          //<!--
            <?php echo "document.location = '$path/login.php?badlogin=true&username=" . $_POST['username'] . "';"; ?>
          //-->
        </script>
        <?php
      } // End if - else statements
    ?>
  </div>
<?php include("header.inc.php"); ?>
