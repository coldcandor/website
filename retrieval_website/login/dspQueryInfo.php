<?php
/*
<fusedoc fuse="dspQueryInfo.php">
        <responsibilities>
	     Displays the query info
        </responsibilities>
        <io>
           <input>
                Displays DB info for input and update. 
           </input>
           <output>
                DB values to query table
           </output>
        </io>
</fusedoc>
*/

require_once("sections/verify.js"); 
?>

<script type="text/javascript"><!-- 
function validate_page(frm) {
     var msg  = " Are you sure you want to Erase all current test values? \n" +
                "==================================================\n\n" +
                " To save the values for cell " + frm.cell_num.options[frm.cell_num.selectedIndex].text + ": \n" +
		"    1) Press Cancel. \n" +
		"    2) Goto the Summary Sheet and Print Report \n" +
		"    3) Goto the Start Times and Print Report \n\n" ;

//    alert("frm.value = " + frm.value) ;
//    if (frm.value == "RESET"){
//        return true;
//    }
//    if (frm.status_qry.value == 'CONTINUE') {
//        return true;
//    }
//    frm.st_remarks.optional = false;
    var stat1 = verify(frm);
    if ( stat1 == false ) {
       return false;
    }
    if (frm.status_qry.value == 'NEW') {
       if (! confirm(msg)) {
//	   location.replace("http://www.phxlab.honeywell.com/~e039805/tti/docs/dspRAILs.php");
           return false;
       }
    }
    msg  = " Are you positive you want to Erase the Data Values for cell " + frm.cell_num.options[frm.cell_num.selectedIndex].text + " ?\n";
    if (frm.status_qry.value == 'NEW') {
       if (! confirm(msg)) {
           return false;
       }
    }

    return (true);
//    return verify(frm);
}
//-->
</script>


<h2> Query, Previous Build, & Run Time Information</h2>


<!-- <body bgcolor=#F7F2D9> -->
<span style="color:green">
 <strong>
  <SCRIPT>
   document.write(Date()+".")
  </SCRIPT>
 </strong>
</span>
<br>

 <!--Table that needs to have values pulled in from Query-->
<?php
   echo '<FORM NAME="query" METHOD="POST" ACTION="' . $myself . 'section.sectionRoot&NextSection=0.0" >' ;
//   echo '<FORM NAME="query" METHOD="POST" onSubmit="return validate_page(this);" ACTION="' . $myself . 'section.sectionRoot&NextSection=0.0" >' ;
//   $lock = 'DISABLED';
   $lock = '';

   require_once('actQueryTable.php');
   $str_temp = get_query_table_str($lock,$cells,$myself);
   echo $str_temp;
?>
 <input type=hidden name="status" value="Submit">

 <HR>

 <strong>NEW TEST</strong>
 <ol>
   <li> Verify information above is correct.  Enter correct information where required.</li>
   <li> Click <strong>NEW</strong> to begin a new test.
        <h2><span style="color:red">CAUTION!! <BR>
     This will erase the current test information and bring up a BLANK TEST.  <BR>
     If you want to continue a test, click CONTINUE!</span></h2></li>
 </ol>

 <strong>CONTINUING TEST</strong>
 <ol>
   <li>Verify information shown above is correct</li>
   <li>Click <strong>CONTINUE</strong>.</li>
 </ol>

 <HR>
<!-- 
CONTINUE = 'SAVE QUERY INFO'
NEW = 'START A NEW TEST, REMOVING PREVIOUS TEST\'S STATUS' 
 -->
 <input type=hidden name="status_qry" value="">
 <input type="submit" value="CONTINUE"  onclick="query.status_qry.value = 'CONTINUE'; return validate_page(query); change_cell(query.cell_num);" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <input type="submit" value="NEW"       onclick="query.status_qry.value = 'NEW'; return validate_page(query); change_cell(query.cell_num);" />
<!-- <input type="submit" value="CONTINUE" onclick="change_cell(query.cell_num); this.form.fuseaction.value=\"section.sectionRoot&NextSection=0.0\"" /> -->
<!-- <input type="submit" id="submit" name="submit" value="  Continue  "/> -->

</form>
