<?php
/*
<fusedoc fuse="act_authenticate.php">
	<responsibilities>
    Uses username and password to authenticate a valid LDAP user
	</responsibilities>
	<io>
		<input>
		  username
      password
		</input>
		<output>
		  0 = Login Failed
		  1 = Login Success
		</output>
	</io>
</fusedoc>
*/

//// Include the SOAP service file
//require_once('nusoap.php');
//
//// Contact the LDAP authentication service via SOAP
//$server = new soapclient($application['fusebox']['authenticate_wsdl'], 'wsdl');
//$proxy = $server->getProxy();
//$rv = $proxy->authen($_POST["eid"], $_POST["password"]);

$allowLogin = false;

$users = array('e123456', 'e654321');
$passwords = array('user1', 'user2');

$userLoc = array_search($_POST['eid'], $users);

if ($userLoc !== false) {
  if ($_POST['password'] == $passwords[$userLoc]) {
    $allowLogin = true;
  } else {
    $allowLogin = false;
  }
} // End if statement

// Check the authentication results
//if($rv != "") { // authentication failed
if (!$allowLogin) {
  
  // Set the login variables, JIC (Just In Case)
  $_SESSION['loggedin'] = 0;
  $badLogin = true;
  
} else { // Authentication Succedded
  
  // Set the cache expiration and garbage collection timers
  ini_set("session.cache_expire","180"); // default is 180, which is 3 hours... 
  ini_set("session.gc_maxlifetime","3600"); // default is 1440, which is only 24 minutes 
  
  // Create the session
  session_start();
  
  // Ensure that no previous session data is saved (like if the browser was closed rather than logging out)
  $_SESSION = array();
  
  // Start the new data
  $_SESSION['loggedin'] = 1;
  $badLogin = false;
  
//  // Connect the LDAP server and retrieve the user's citizenship status
//  $ldap = ldap_connect('131.127.185.15'); 
//  ldap_bind($ldap);
//  $res = ldap_search($ldap, 'o=Honeywell', "uid=" . $_POST['eid'], array('hwuscitizenshipstatus'));
//  $list = ldap_get_entries($ldap, $res);
//  ldap_close($ldap);
  
//  // Set the user's export permissions
//  if (($list[0]['hwuscitizenshipstatus'][0] == '1' || $list[0]['hwuscitizenshipstatus'][0] == '3') && $_POST['export'] == 'US') {
//    $_SESSION['exportRestrict'] = 0;
//    $restrictLogin = false;
//  } else {
//    $_SESSION['exportRestrict'] = 1;
//    $restrictLogin = true;
//    $_SESSION['loggedin'] = 0;
//  } // End if - else statement

  // Set the user's edit permissions
  $editors = array("e123456"); 
  if ($_SESSION['exportRestrict'] == 0 && (array_search($_POST['eid'], $editors) !== false)) {
    $_SESSION['editRestrict'] = 0;
  } else {
    $_SESSION['editRestrict'] = 1;
  } // End if - else statement
  
  // Determine if the user wants their eid remembered
  if ($_POST['remember'] == 'on') { 
    setcookie('eid', strtolower($attributes['eid']), time()+60*60*24*356); // Set the remember eid cookie to expire in one year
  } else {
    setcookie('eid', "", time()-3600);
  } // End if - else statement

}
?>
