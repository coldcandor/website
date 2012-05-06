<?php echo $header ?>

  <!-- dspLogin.php                                                                                -->
  <!--                                                                                             -->
  <!-- This file represents the login screen for the data retreival sites.                         -->
  <!--                                                                                             -->
  <!-- Author:  Craig Stevens, Heavily Modified by Eric Shields                                    -->
       
    <div id="sbuHeading">Data &amp; Automation</div>
    <div id="dateHeading"><script type="text/javascript">writeFormattedDate();</script></div>
    
    <p style="text-align:center"><span id="welcomeHeading">This web application requires that you login</span></p>
    
    <p style="text-align:center; padding: 0px 35px;">Enter LDAP username (EID) and password.</p>

      <div id="login">
      
        <form action="<?php echo $myself ?>login.auth" method="post" onsubmit="return validate()"><div>
          <table class="loginTable" cellpadding="1" cellspacing="0" style="border: 1px; text-align: center;">
            <tr>
            <td id="badLogin" colspan="2" style="text-align: center; color: red; font-weight: bold; <?php if($badLogin == false) { echo 'display: none;'; } ?>">
                Login Failed!<br />
                <span style="font-weight: normal;">This most likely means you typed your eid and/or password incorrectly.</span>
              </td>
            <td id="exportContLogin" colspan="2" style="text-align: center; color: red; font-weight: bold; <?php if($restrictLogin == false) { echo 'display: none;'; } ?>">
                Login Failed!<br />
                <span style="font-weight: normal;">This area is export controlled.</span>
              </td>
            </tr>
            <tr>
              <td style="text-align: right; width: 30%;">
                <span style="font-weight: bold;">EID:</span>
              </td>
              <td style="text-align: left; width: 70%;">
                <input id="eid" type="text" name="eid" value="<?php echo $_POST['eid'] != '' ? $_POST['eid'] : $_COOKIE['eid'] ; ?>" class="inputBoxText" style="width:150px; margin-top: 5px;" /> <span id="error" style="display: none; color: red; font-weight: bold;">Invalid EID</span>
              </td>
            </tr>
            <tr>
              <td style="text-align: right; width: 30%;">
                <span style="font-weight: bold;">Password:</span>
              </td>
              <td class="noBorderLeft noBorderTop noBorderBottom" style="text-align: left; width: 70%;">
                <input id="password" type="password" name="password" class="inputBoxText" style="width:150px;" /> 
                <span style="font-size: smaller;">
                  (<a href="javascript: void window.open('https://www.honeywell.com/secure/pm/index.jsp?wizard=true','help','width=640,height=480,scrollbars')">LDAP password</a>)
                </span>
              </td>
            </tr>
<!--            <tr>
              <td style="text-align: right; width: 30%;">
                <span style="font-weight: bold;">Location:</span>
              </td>
              <td class="noBorderLeft noBorderTop noBorderBottom" style="text-align: left; width: 70%;">
                <select id="export" name="export" class="selectList"><option value="nonUS">Outside the US</option><option value="US">US</option></select>
              </td>
            </tr> -->
            <tr>
              <td colspan="2">
                <input id="submit" type="submit" name="submit" value="   Login   " class="standardbutton" />
                &nbsp;
              </td>
            </tr>
            <tr>
              <td colspan="2">
                <input type="checkbox" name="remember" <?php if (isset($_COOKIE['eid'])) { echo "checked='checked'"; } ?>/>
                <a href="" onclick="document.forms[0].remember.checked=!document.forms[0].remember.checked;return false">Remember my username</a>
              </td>
            </tr>
          </table>
          <span style="font-size:smaller;">
            By proceeding to log on, you expressly consent to the terms in the <br /><a href="javascript: void window.open('http://cfdev.phxlab.honeywell.com/shared/CustomTags/userlogin/disclaimer.html','help','width=640,height=480,scrollbars');">Honeywell Sign-On Policy</a>
          </span>
        </div></form> 
        
      </div>
      <br />
