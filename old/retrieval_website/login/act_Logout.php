<?php
  session_start();
/*
<fusedoc fuse="act_Logout.php">
  <responsibilities>
    Logout of TTI.  Remove cookies
  </responsibilities>
  <io>
    <input>
      none
    </input>
    <output>
      Remove eid cookie
    </output>
  </io>
</fusedoc>
*/

/* Remove Cookies */
$_SESSION = array();
session_destroy();
?>
