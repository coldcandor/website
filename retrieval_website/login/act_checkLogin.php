<?php
  ini_set("session.cache_expire","180"); // default is 180, which is 3 hours... 
  ini_set("session.gc_maxlifetime","3600"); // default is 1440, which is only 24 minutes 
  session_start();
  if ($_SESSION['loggedin'] != 1 && $_GET['fuseaction'] != "login.login" && $_GET['fuseaction'] != "login.auth") {
    header( 'Location: ' . $myself . 'login.login' );
  }
  if ($_SESSION['editRestrict'] != 0 && $_GET['fuseaction'] == 'vdas.inv_edit') {
    header( 'Location: ' . $myself . 'vdas.inv' );
  }
?>