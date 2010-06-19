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
    
    <?php // Determine the page to redirect to after successful login
      if ($_SERVER['HTTP_REFERER'] != NULL && strpos($_SERVER['HTTP_REFERER'], "coldcandor.com") && !strpos($_SERVER['HTTP_REFERER'], "?log")) {
        $redirect = $_SERVER['HTTP_REFERER'];
      } else {
        $redirect = "$path/index.php?loginmessage=true"; 
      } // End if else statements
    ?>

    <div id="subHeader"> <!-- For easy determination of current page, without the nasty PHP/JS -->
      Please Log In
    </div>
    <div id="loginContent"> <!-- Start Index Content -->
      <form action="<?php echo $path ?>/auth.php" method="post"><div>
        <div id="badLogin" <?php echo $_GET['badlogin'] == true ? "" : "style='display: none'"; ?>>
          Login Failed!<br />
          <span style="font-weight: normal;">This most likely means you typed your username and/or password incorrectly.</span>
        </div>
        <input type="hidden" id="referer" name="referer" value="<?php echo $redirect; ?>" />
        <table class="loginTable" cellpadding="1" cellspacing="0" style="border: 1px solid #000000; text-align: center;">
          <tr>
            <td class="label">
              <span style="font-weight: bold;">Username:</span>
            </td>
            <td class="input">
              <input class="inputTextBox" id="username" type="text" name="username" value="<?php echo $_GET['username'] != '' ? $_GET['username'] : $_COOKIE['username'] ; ?>" style="width:150px; margin-top: 5px;" />
            </td>
          </tr>
          <tr>
            <td class="label">
              <span style="font-weight: bold;">Password:</span>.
            </td>
            <td class="input">
              <input class="inputTextBox" id="password" type="password" name="password" style="width:150px;" /> 
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <input class="standardButton" id="submit" type="submit" name="submit" value="   Login   " />
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <input type="checkbox" name="remember" <?php if (isset($_COOKIE['username'])) { echo "checked='checked'"; } ?>/>
              <a href="javascript: void(0);" onclick="document.forms[0].remember.checked=!document.forms[0].remember.checked;">Remember my username</a>
            </td>
          </tr>
        </table>
        <p style="font-weight: normal">Not yet registered?  <a href="register.php">Click here</a> to Register Now!</p>
        <p style="font-weight: normal" id="helpMessage">Having trouble logging in? <a href="javascript: void(0)" onclick="toggleText('loginHelp'); toggleText('helpMessage')">Click Here</a>!</p>
        <div id="loginHelp"  style="text-align: center; font-weight: bold; display: none">
          <p>If you think you've forgotten your password, <a href="other/pass_recovery.php">Click Here</a>.</p>
          <p>This website uses cookies and javascript to handle logins.  If you have cookies or javascript disabled, the login process will not function!  To check if cookies are enabled, go to Tools menu -> Options -> Privacy Tab and ensure "Accept cookies from sites" is checked.  There is no easy way to disable javascript unless you are using an addon.   Both Javascript and Cookies are enabled by default.</p>
          <p>Also, the login seems to occasionally have issues with the Firefox password remembering functionality.  If you encounter problems logging in and are certain that cookies and javascript are enabled, try disabling password remembering.  You can do this by opening the Tools Menu -> Options -> Security tab and unchecking "Remember passwords for sites".</p>
        </div>
      </div></form> 
    </div> <!-- End Index Content -->

    <?php include("footer.inc.php"); ?>
