<?php
/* index.php is the default starting point for the php fusebox. */

$FUSEBOX_APPLICATION_NAME = "cacheddata";
$FUSEBOX_APPLICATION_PATH = "";

// bring in the $application scope
@include($FUSEBOX_APPLICATION_PATH.'parsed/app_'.$FUSEBOX_APPLICATION_NAME.'.php');

// Using relative path to fusebox4 runtime - ccs
require_once("./fusebox4.runtime.php4.php");

?>