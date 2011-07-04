    <?php include("header.inc.php"); ?>

    <script type="text/javascript">
      //<!--
      function validateContact() {
        
        var retval = true;
        var checkEmail = new RegExp(/.+@.+\..+/);
        
        if (document.forms[0].username.value == '') {
          alert("Cannot post without a username!");
          retval = false;
        }
        
        if (!document.forms[0].email.value.match(checkEmail)) {
          alert("You must enter a valid email!");
          retval = false;
        }
        
        if (document.forms[0].message.value == '') {
          alert("Cannot post with an empty message!");
          retval = false;
        }
        
        if (document.forms[0].message.value.match('<script')) {
          alert("No scrpits are allowed in the post!");
          retval = false;
        }
        
        return retval;
      }
      //-->
    </script>
    
    <div id="subHeader"> <!-- For easy determination of current page, without the nasty PHP/JS -->
      Contact the Webmaster
    </div>
    <div id="contactContent"> <!-- Start Index Content -->
      <?php if (isset($_POST['message'])) {
        $to = 'shiermail-website@yahoo.com';
        $subject = "Message from " . $_POST['username'];
        $message = $_POST['username'] . " has left you a message on the Freedom's Choice website.  Their email is " . $_POST['email'] . ".  Their message is:\n\n" . $_POST['message'];
        $headers = "Reply-To: " . $_POST['email'];
        if (mail($to, $subject, $message, $headers)) {
          ?><h3>Your message has been successfully sent to the Webmaster.</h3><?php
        } else {
          ?><h3>There was an error sending your message.  If the problem persists, please contact the webmaster through another email program at webmaster@coldcandor.com.</h3><?php
        }
      } else { ?>
        <p>Please use the form below to contact the webmaster (Ham).  If you do not include an email, then I will be unable to respond to you.  Your email and comments will be kept confidential.</p>
        <form action="" method="post" onsubmit="return validateContact()"><div>
          <table class="contactTable" cellpadding="1" cellspacing="0" style="border: 1px solid #000000; text-align: center;">
            <tr>
              <td class="label">
                <span style="font-weight: bold;">Username: </span>
              </td>
              <td class="input">
                <input class="inputTextBox" id="username" type="text" name="username" value="<?php echo $_COOKIE['username']; ?>" style="width:150px; margin-top: 5px;" />
              </td>
            </tr>
            <tr>
              <td class="label">
                <span style="font-weight: bold;">Email: </span>
              </td>
              <td class="input">
                <input class="inputTextBox" type="text" id="email" name="email" />
              </td>
            </tr>
            <tr>
              <td class="label">
                <span style="font-weight: bold;">Message: </span>
              </td>
              <td class="input">
                <textarea id="message" name="message" cols="50" rows="15"></textarea>
              </td>
            </tr>
            <tr>
              <td colspan="2">
                <input class="standardButton" id="submit" type="submit" name="submit" value="   Submit   " />
              </td>
            </tr>
          </table>
        </div></form>
      <?php } ?>
    </div> <!-- End Index Content -->
    <?php include("footer.inc.php"); ?>
