  <?php echo $header; ?>

    <!-- csv_edit.php                                                                                     -->
    <!--                                                                                                  -->
    <!-- This file determines the appropriate CSV to edit using the HTTP_REFERRER information.  Then      -->
    <!-- provides interactive editing functionality.  The changes are saved back to the CSV file,         -->
    <!-- OVERWRITING THE ORIGIONAL.                                                                       -->
    <!--                                                                                                  -->
    <!-- Author:  Bob Apodaca, adapted by Eric Shields                                                    -->
     
    <?php // Determine the file to edit
    
      $fn = "VDAS/files/inventory/inv_" . $_SESSION['hardware'] . ".csv";
    
//      // Determine the referer
//      $referer = $_SERVER["HTTP_REFERER"];
//      
//      // Find the index of the last '/' in the path
//      $pos = strrpos($referer, "/");
//      
//      // seperate the filename of the referer page from the string
//      $refPage = substr($referer, $pos + 1);
//      
//      // If the referer is this file, the rcover the filename from the $_POST array
//      if ($refPage == "csv_edit.php") {
//        $fn = $_POST["fn"];
//      } else {
//        $fn = "VDAS/files/inventory/" . str_replace(".php", ".csv", $refPage);
//      } // End if - else statement
    ?>
    
    <!-- Heading information displayed on page -->
    <div id="sbuHeading">Data &amp; Automation</div>
    <div id="dateHeading"><script type="text/javascript">writeFormattedDate();</script></div>
    
    <p style="text-align:center"><span id="welcomeHeading"><?php echo $fn?></span></p>
    <!-- -->
    
    <!-- Container for the HTML table -->    
    <div id="inv_sub">
    
      <!-- ===================== Bob's Origional Code ===================== -->
      <div id="onlyColumn">
      </div>
      <?php
      if(!isset($_POST['action']) || $_POST['action'] == '') { // Get data
        if($fp = fopen("$fn", 'r')) { // Read file
          while(($data = fgetcsv($fp, 1024))) {
            if(!isset($tableHeader)) {
        $tableHeader = $data;
            } else {
        $rows[] = $data;
            }
          }
          fclose($fp);
        }
        echo '<form name="data_tbl" method="post" action="' . $myself . $_GET['fuseaction']
       . '" onsubmit="return val_action(this);"><div>' . "\n";
        echo ' <input type="hidden" name="action" value=""/>' . "\n";
        echo ' <input type="hidden" name="fn" value="' . $fn . '"/>' . "\n";
        echo ' <table border="1">' . "\n";
        echo ' <tr>' . "\n";
        echo '  <th>&nbsp;</th>' . "\n";
        foreach($tableHeader as $v) {
          echo "  <th>$v</th>\n";
        }
          echo " </tr>\n";
        if(isset($rows)) {
          foreach($rows as $i => $ary) {
            echo " <tr>\n";
            echo '  <td><input type="radio" name="line" value="' . ($i + 1)
        . '"/></td>' . "\n";
            foreach($ary as $v) {
        echo "  <td>" . $v . "</td>\n";
            }
            echo " </tr>\n";
          }
        }
        echo " </table>\n";
      ?>
      <p>
      <input type="submit" value="Edit" onclick="document.data_tbl.action.value='edit'"/>
      <input type="submit" value="Delete" onclick="document.data_tbl.action.value='delete'"/>
      <input type="submit" value="New" onclick="document.data_tbl.action.value='new'"/>
      </p>
      </div></form>
      <?php
      } elseif(eregi('(delete|edit|new)', $_POST['action'])) {
        // State of submit button
        $state = '';
        if(eregi('delete', $_POST['action']))
          $state = ' disabled="true"';
        // Label on submit button
        if($_POST['action'] == 'delete')
          $btn = 'Delete';
        else
          $btn = 'Save';
        // Load headers from CSV
        if($fp = fopen($fn, 'r')) { // Read file
          $i = 0;
          if(! isset($_POST['line']) )
            $_POST['line'] = 0;
          while(($data = fgetcsv($fp, 1024, ','))) {
            if($i == 0)
        $tableHeader = $data;
            if($i == $_POST['line'])
          break;
            $i++;
          }
          fclose($fp);
        }
        // Determine next action
        if($_POST['action'] == 'delete') {
          $next = 'remove';
        } else if($_POST['action'] == 'edit')
          $next = 'update';
        else {
          $next = 'save';
          foreach($tableHeader as $k => $v)
            $data[$k] = '';
        }
      ?>
      <form name="item" method="post" action="<?php echo $myself . $_GET['fuseaction']?>"><div>
      <!--      onsubmit="return val_line(this);"> -->
       <input type="hidden" name="action" value="<?php echo $next?>"/>
       <input type="hidden" name="fn" value="<?php echo $_POST['fn']?>"/>
       <input type="hidden" name="line" value="<?php echo $_POST['line']?>"/>
       <table>
        <tr>
         <th>Item</th>
         <th>Value</th>
        </tr>
      <?php
         foreach($data as $i => $v) {
           echo "  <tr>\n";
           echo '   <td style="font-decoration: bold; text-align: right">' .
           $tableHeader[$i] . ':</td>' . "\n";
           echo '   <td><input id="col' . $i . '" name="items[]" value="' . $data[$i]
           . '"' . $state . "/>\n";
           echo "  </tr>\n";
         }
      ?>
        </tr>
       </table>
       <input type="submit" value="<?php echo $btn?>" onclick="return val_line(document.item)"/>
       <input type="submit" value="Cancel" onclick="document.item.action.value=''"/>
      </div></form>
      <?php  
      } else { // update, remove, save
        if($_POST['action'] == 'save') { // Append new information to existing file
          $fp = fopen($fn, 'a');
          fwrite($fp, implode(",", $_POST['items']) . "\n");
          fclose($fp);
        } else {
          // Read entire file
          $fp = fopen($fn, 'r');
          while(($data = fgetcsv($fp, 1024, ','))) {
            $rows[] = $data;
          }
          fclose($fp);
          // Write file
          $fp = fopen($fn, "w");
          $i = 0;
          foreach($rows as $ary) {
            if($i == $_POST['line']) {
        if($_POST['action'] == 'remove') {
          $i++;
          continue;
        } else
          $ary = $_POST['items'];
            }
            fwrite($fp, implode(',', $ary) . "\n");
            $i++;
          }
          fclose($fp);
        }
      ?>
      <form name="view" method="post" action="<?php echo $myself . $_GET['fuseaction']?>"><div>
       <input type="hidden" name="fn" value="<?php echo $_POST['fn']?>"/>
       <p>Changes saved.</p>
       <input type="submit" value="Refresh"/>
      </div></form>
      <?php 
      }
      ?>
      <script type="text/javascript"><!--
      function val_action(frm) {
        if(frm.line.length == undefined) {
          frm.line.checked = true;
          return true;
        }
        for(c = 0, i = 0; i < frm.line.length; i++) {
          if(frm.line[i].checked)
            c++;
        }
        if(c < 1 && frm.action.value != 'new') {
          alert('No line selected.  Select a line and try again.');
          return false;
        }
        return true;
      }
      function val_line(frm) {
        for(b = 0, c = 0, i = 0; i < <?php echo $i+1?>; i++) {
          entry = 'col' + i;
          elt = document.getElementById(entry);
          if(elt.value == '')
            b++;
          if(elt.value.match(/,/))
            c++;
        }
        if(b > 0) {
          alert('No field blank leave you.');
          return false;
        }
        if(c > 0) {
          alert('Comma character not allowed.');
          return false;
        }
        return true;
      }
      //-->
      </script>
      <!-- =================== END Bob's Origional Code =================== -->
      
    </div>
    <br />
