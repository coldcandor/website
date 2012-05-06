<?php
/* fusebox.init.php is a "globals" file
 * This is included on every request, if it exists. 
 * It runs after the attributes are loaded, but before any 
 * fuseactions are run so you can do neat things with it like 
 * run security and change $attributes['fuseaction'] for login.
 */

if ( !isset($self) ) $self = $application['fusebox']['self']; 

$myself = $self.'?'.$application['fusebox']['fuseactionVariable'].'=';

?>