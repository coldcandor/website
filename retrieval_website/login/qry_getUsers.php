<?php
/*
<fusedoc fuse="qry_getUsers.php">
        <responsibilities>
                Get the valid TTI Users from the database table
        </responsibilities>
        <io>
           <input>
                Flag - indicates user group
           </input>
           <output>
                Array of valid users
           </output>
        </io>
</fusedoc>
*/

function get_users($user, $init_vals) {
  global $application;

// Connect to Database.
require_once('DB.php');
$db = DB::connect($application['fusebox']['dataBaseConfig']);
if (DB::iserror($db)) {
	die("\n<H1><span style=\"color:red\"> " . $db->getMessage(  ) . " </span></H1>\n");
}

//$init_vals = 0 mean is this a valid Section Approver
//$init_vals = 1 mean is this a valid Quality Control Approver

 if (isset($init_vals) && $init_vals == 1) { 
    // Issue the query to compare user values with approving users
    $sql = "SELECT man " .
           "FROM  tti_status " .
	   "WHERE cell_id='" . $_COOKIE['cell_no'] . "' AND " .
                 "man='" . $user . "'" ;
    
 } else {
    // Issue the query to get user values from the current database
    $sql = "SELECT tti_users.e_id,tti_users.name,tti_users.man " .
            "FROM  tti_users " ;
 }

 $q = $db->query($sql);
 if (DB::iserror($q)) {
    die("u $user iv $init_vals DataBase query problem in qry_getUsers while processing: <BR>\n" .$sql  . "<BR>\n " . $q->getMessage(  ));
 }

 $good = 0;
 $values = array();
 if (isset($init_vals) && $init_vals == 1) {
    $values = $q->fetchRow();
    if ($values[0] == NULL) {
       $good = 1;
    } 
 } else {
    // Generate arrays to be used by caller
    //$user_names = array();
    while ($q->fetchInto($values)) {
       if ($user ==  $values[0]) {
          $good = 1;
	  break;
       }
//     $user_names[$values[0]]="$values[1]" ;
//     ${$values[0]}=$values[1] ;
    }
 }

 // Disconnect from the Database
 $db->disconnect();
//var_dump($test_values);
 return ($good);
}
?>
