    <?php include("header.inc.php"); ?>

    <script type="text/javascript">
      //<!--
      function validateRegister() {
        
        var retval = true;
        var checkEmail = new RegExp(/.+@.+\..+/);
        
        if (document.forms[0].username_r.value == '') {
          alert("You must supply a username!");
          retval = false;
        }
        
        if (document.forms[0].password_r.value == '') {
          alert("You must supply password!");
          retval = false;
        }
        
        if (document.forms[0].passwordconfirm.value != document.forms[0].password_r.value) {
          alert("Your password confirmation does not match your password!");
          retval = false;
        }
        
        if (!document.forms[0].email.value.match(checkEmail)) {
          alert("You must supply a valid email!");
          retval = false;
        }
        
        if (document.forms[0].emailconfirm.value != document.forms[0].email.value) {
          alert("Your email confirmation does not match your email!");
          retval = false;
        }
        
        return retval;
      }
      //-->
    </script>
    
    <div id="subHeader"> <!-- For easy determination of current page, without the nasty PHP/JS -->
      Freedom's Choice Guild Website Registration
    </div>
    <div id="registerContent"> <!-- Start Index Content -->
      <?php if (isset($_POST['emailconfirm'])) {
        
        // Connecting, selecting database
        $link = mysql_connect("localhost", 'root', 'secure-M3')
           or die('Could not connect: ' . mysql_error());
        mysql_select_db('freedomschoice') or die('Could not select database');
        
        // Performing SQL Query
        $query = "SELECT username FROM weblogin";
        $result = mysql_query($query) or die('Query failed: ' . mysql_error());
        
        // Determine if this username is already registered
        $duplicate = false;
        while ($line = mysql_fetch_assoc($result)) {
          if ($line['username'] == $_POST['username_r']) {
            $duplicate = true;
            break;
          } // End if statement
        } // End while loop
        
        if (!$duplicate) {
          // Performing SQL query
          $query = "INSERT INTO weblogin ( username,password,email,accessLevel,dateRegistered ) VALUES('" . strtolower($_POST['username_r']) . "', '" . $_POST['password_r'] . "', '" . $_POST['email'] . "', '0', '" . date("Y-m-d") . "');";
          $result = mysql_query($query) or die('Query failed: ' . mysql_error());
          
          $to = 'shiermail-website@yahoo.com';
          $subject = "Notice of Registration by " . $_POST['username_r'];
          $message = $_POST['username_r'] . " has registered for the Freedom's Choice Website.  Please confrim " . $_POST['username_r'] . " is a valid guild member and, if so, update their access level.  Their email address is " . $_POST['email'] . ".";
          $headers = "Reply-To: " . $_POST['email'];
          if (mail($to, $subject, $message, $headers)) {
            ?><h4>The webmaster has been contacted about your registration.  Please wait for an email confirming your registration.  This should arrive within 1 to 3 days.  If you have not received a reply within 3 days, please use the <a href="contact.php">Contact the Webmaster</a> link to check on your status.  Thanks for registering!</h4>
            <h4>Note:  If you attempt to login before receiving confirmation, it will appear that you logged in successfully, but nothing will have changed (a logout button will not even appear).</h4><?php
          } else {
            ?><h3>There was an error notifying the webmaster of your registration, please use the <a href="contact.php">Contact the Webmaster</a> link to do so.  You can also directly email webmaster@coldcandor.com, if you wish.</h3><?php
          }
        } // End if statment
        
        // Closing connection
        mysql_close($link);

      } 
      
      if (!isset($_POST['emailconfirm']) || $duplicate) { ?>
        <p>So you've decided it's time to get registered, great!  You've come to the right place.  Just fill out this simple form.  An email will be sent to the webmaster noting this registration so that he can update your access level according to your guild rank, as well as confirm that you are someone from that guild that should be given a registration.</p>  
        <p>Due to that restriction, your account will not be activated until the webmaster validates this information.  This should be done within 1 to 3 days.</p>
        <h3 class="badUsername"<?php echo $duplicate ? '' : ' style="display: none"'; ?>>The username you specified has already been taken!</h3>
        <form action="" method="post" onsubmit="return validateRegister()"><div>
          <table class="RegisterTable" cellpadding="1" cellspacing="0" style="border: 1px solid #000000; text-align: center;">
            <tr>
              <td class="label">
                <span style="font-weight: bold;">Username: </span>
              </td>
              <td class="input">
                <input class="inputTextBox" id="username_r" type="text" name="username_r" value="<?php echo $_POST['username_r']; ?>" />
              </td>
              <td class="desc">
                Please use your abbreviated or main's name from guild chat, as it may be used to identiy you inside the site.
              </td>
            </tr>
            <tr><td colspan="3">&nbsp;</td></tr>
            <tr>
              <td class="label">
                <span style="font-weight: bold;">Password: </span>
              </td>
              <td class="input">
                <input class="inputTextBox" type="password" id="password_r" name="password_r" />
              </td>
              <td class="desc">
                Please choose a password.  I am not aware of any restrictions to what can be used.
              </td>
            </tr>
            <tr>
              <td class="label">
                <span style="font-weight: bold;">Verify Password: </span>
              </td>
              <td class="input">
                <input class="inputTextBox" type="password" id="passwordconfirm" name="passwordconfirm" />
              </td>
              <td class="desc">
                Please verify your password.
              </td>
            </tr>
            <tr><td colspan="3">&nbsp;</td></tr>
            <tr>
              <td class="label">
                <span style="font-weight: bold;">Email: </span>
              </td>
              <td class="input">
                <input class="inputTextBox" type="text" id="email" name="email" value="<?php echo $_POST['email']; ?>" />
              </td>
              <td class="desc">
                Your email will in no way be used by the webmaster other than potential guild-related mailings and password recovery.
              </td>
            </tr>
            <tr>
              <td class="label">
                <span style="font-weight: bold;">Verify Email: </span>
              </td>
              <td class="input">
                <input class="inputTextBox" type="text" id="emailconfirm" name="emailconfirm" value="<?php echo $_POST['emailconfirm']; ?>"/>
              </td>
              <td class="desc">
                Please verify your email.
              </td>
            </tr>
            <tr>
              <td colspan="3">
                <input class="standardButton" id="submit" type="submit" name="submit" value="   Submit   " />
              </td>
            </tr>
          </table>
        </div></form>
      <?php } /* End if statement */ ?>
    </div> <!-- End Index Content -->
    <?php include("footer.inc.php"); ?>
