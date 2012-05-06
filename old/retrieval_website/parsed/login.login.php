<?php

$myFusebox['thisCircuit'] = "wrapper";
$myFusebox['thisFuseaction'] = "ihTemplateHeader";
ob_start();
if ( file_exists($application["fusebox"]["WebRootToAppRootPath"]."css_js_include/dspHeader.php") ) {
include($application["fusebox"]["WebRootToAppRootPath"]."css_js_include/dspHeader.php");
}
 else {
ob_end_clean();
__cfthrow(array("type"=>"fusebox.missingFuse", "message"=>"missing Fuse", "detail"=>"You tried to include a fuse dspHeader in circuit wrapper which does not exist."));
}
$header = ob_get_contents();
ob_end_clean();
$myFusebox['thisCircuit'] = "wrapper";
$myFusebox['thisFuseaction'] = "ihTemplateHeader";
$myFusebox['thisCircuit'] = "login";
$myFusebox['thisFuseaction'] = "checkLogin";
if ( file_exists($application["fusebox"]["WebRootToAppRootPath"]."login/act_checkLogin.php") ) {
include($application["fusebox"]["WebRootToAppRootPath"]."login/act_checkLogin.php");
}
 else {
__cfthrow(array("type"=>"fusebox.missingFuse", "message"=>"missing Fuse", "detail"=>"You tried to include a fuse act_checkLogin in circuit login which does not exist."));
}
$myFusebox['thisCircuit'] = "login";
$myFusebox['thisFuseaction'] = "checkLogin";
$myFusebox['thisCircuit'] = "login";
$myFusebox['thisFuseaction'] = "login";
if ( file_exists($application["fusebox"]["WebRootToAppRootPath"]."login/dspLogin.php") ) {
include($application["fusebox"]["WebRootToAppRootPath"]."login/dspLogin.php");
}
 else {
__cfthrow(array("type"=>"fusebox.missingFuse", "message"=>"missing Fuse", "detail"=>"You tried to include a fuse dspLogin in circuit login which does not exist."));
}
$myFusebox['thisCircuit'] = "login";
$myFusebox['thisFuseaction'] = "login";
$myFusebox['thisCircuit'] = "wrapper";
$myFusebox['thisFuseaction'] = "ihTemplateFooter";
if ( file_exists($application["fusebox"]["WebRootToAppRootPath"]."css_js_include/dspFooter.php") ) {
include($application["fusebox"]["WebRootToAppRootPath"]."css_js_include/dspFooter.php");
}
 else {
__cfthrow(array("type"=>"fusebox.missingFuse", "message"=>"missing Fuse", "detail"=>"You tried to include a fuse dspFooter in circuit wrapper which does not exist."));
}
$myFusebox['thisCircuit'] = "wrapper";
$myFusebox['thisFuseaction'] = "ihTemplateFooter";
$myFusebox['thisCircuit'] = "login";
$myFusebox['thisFuseaction'] = "login";

?>