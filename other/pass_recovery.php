    <?php include("../header.inc.php"); ?>
    
    <div id="subHeader"> <!-- For easy determination of current page, without the nasty PHP/JS -->
      Password Recovery
    </div>
    <div id="recoveryContent"> <!-- Start Index Content -->
      <?php if (isset($_POST['username_s'])) {
        
        $email = NULL;
        $pass = NULL;
  
        // Connecting, selecting database
#        $link = mysql_connect('localhost', 'deathtoll2001', '5#dumb')
        $link = mysql_connect("sqlc40b.carrierzone.com", 'deathtoll2001', '5#dumb')
           or die('Could not connect: ' . mysql_error());
        mysql_select_db('deathtoll2001') or die('Could not select database');
        
        // Performing SQL query
        $query = "SELECT username, email, password FROM wow_weblogin";
        $result = mysql_query($query) or die('Query failed: ' . mysql_error());
        
        // Print the announcements to the page
        while ($line = mysql_fetch_assoc($result)) {
          
          if (strtolower($line['username']) == strtolower($_POST['username_s'])) {
            $email = $line['email'];
            $pass = $line['password'];
            break;
          } // End if statement
          
        } // End while loop
        
        // Free resultset
        mysql_free_result($result);
  
        // Closing connection
        mysql_close($link);
        
        if ($email != NULL && $pass != NULL) {
          
          $to = '$email';
          $subject = "Your Freedom's Choice Website password recovery request";
          $message = "A request has been made to recover the Freedoms Choice Website password for the account associated with this email address.  Your login information is as follows:\n\nUsername:  " . $line['username'] . "\nPassword:  " . $pass . "\n\nThe username is no longer case sensitive, but the password is.  For best results, copy and paste the information into the login form.\n\nRemember:  Firefox's \"Remember Passwords\" feature seems to not work correctly for the website currently, so if you have that enabled, please disable it, visit a different page, return here, and try again.";
          $headers = "From: webmaster@coldcandor.com\r\nReply-To: webmaster@coldcandor.com";
          if (mail($to, $subject, $message, $headers)) {
            ?><h4>An email containing your login information has been sent to the address registered to the username you supplied.  If you do not receive it, please use the <a href="contact.php">Contact the Webmaster</a> link.</h4><?php
          } else {
            ?><h3>There was an error sending an email to you (an email was found associated to the username you supplied, but the mail-sending program has failed).  Please use the <a href="contact.php">Contact the Webmaster</a> link.</h3><?php
          } // End if - else statements
          
        } else {
          ?><h4>No email could be found associated to your username!  Either the username you entered or the email associated with it could not be found in the database. Please register, or if you're certain you already are, use the <a href="contact.php">Contact the Webmaster</a> feature.</h4><?php
        } // End if - else statements
          
      } else {
        
        ?><form action="" method="post"><div>
          <p style="text-align: center">Please enter your username in the input box below.  An email will be sent to the email address registered to that username.</p>
          <table class="recoveryTable" cellpadding="1" cellspacing="0" style="border: 1px solid #000000; text-align: center;">
            <tr>
              <td class="label">
                <span style="font-weight: bold;">Username:</span>
              </td>
              <td class="input">
                <input class="inputTextBox" id="username_s" type="text" name="username_s" />
              </td>
            </tr>
            <tr>
              <td colspan="2" style="text-align: center">
                <input type="submit" id="submit" onclick="document.forms[0].submit.disabled = true" name="submit" value="  Submit  " />
              </td>
            </tr>
          </table>
        </div></form>
        
      <?php } /* End if - else statements */ ?>
        
    </div> <!-- End Index Content -->

    <?php include("../footer.inc.php"); ?>
