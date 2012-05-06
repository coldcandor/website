<?php
/*
<fusedoc fuse="qry_getCellInfo.php">
        <responsibilities>
                Get an array of valid test cells from tti database
        </responsibilities>
        <io>
           <input>
                cell_no Cookie
           </input>
           <output>
                cell_no Cookie
                Arrays of Database info.
           </output>
        </io>
</fusedoc>
*/

 require_once('DB.php');

 $db = DB::connect($application['fusebox']['dataBaseConfig']);
 if (DB::iserror($db)) {
    die($db->getMessage(  ));
 }
  
 // Issue the query to get status of all sections
 $sql = "SELECT tti_cell.id,tti_cell.cell FROM tti_cell";
  
 $q = $db->query($sql);
 if (DB::iserror($q)) {
    die("<H3>DataBase query problem while processing: </H3>\n<H2>" .$sql  . "</H2>\n " . $q->getMessage(  ));
 }


 // Generate arrays to be used to display section status
 while ($q->fetchInto($row)) {
    $cells[$row[0]] = $row[1];
 }

 $db->disconnect();
?>
