    <?php echo $header; ?>

    <!-- index.php                                                                                        -->
    <!--                                                                                                  -->
    <!-- This file covers the majority of the functionality of this website:  The search and download     -->
    <!-- of VDAS test records.  The form actually consists of 3 forms - one with all the filtering        -->
    <!-- fields and the "Search Now" button, one with the "Download Single File" button, and one          -->
    <!-- with the "Download All Files" button.  This is to allow the submissions to refer to seperate     -->
    <!-- PHP scripts.                                                                                     -->
    <!-- My hope is that this file is sufficiently commented for a person farmiliar with PHP, javascript, -->
    <!-- and HTML concepts to easily follow.                                                              -->
    <!--                                                                                                  -->
    <!-- Author:  Eric Shields                                                                            -->
    
    <!-- Heading information displayed on page -->
    <div id="sbuHeading">Data &amp; Automation</div>
    <div id="dateHeading"><script type="text/javascript">writeFormattedDate();</script></div>
    
    <p style="text-align:center"><span id="welcomeHeading">Recall DATS Data</span></p>
    
    <p style="text-align:center">Select the criteria for your search and then press the "Search Now" button.</p>
    <!-- -->
    
    <!-- Container for all the recall form stuff -->
    <div id="recallContainer">
    
      <!-- Start of the form that performs the filtering of the records -->
      <form id="recallForm" action="" onsubmit="return validate()" method="post"><div>
      
        <table class="noFormatTable">
      
        <?php 
        
          /*****************************************************************************
           * 
           *****************************************************************************/
        
           // Open the index file for reading
           $fp = fopen("/usr2/testdata/DATA_FILES.INDX" ,'r');

           // set useful variables
           $cell = array();
           $engine = array();
           $date = array();
           
           // If the arrays have already been built this session, use those
           if ($_SESSION['DATScell'] != null) {
             
             $cell = $_SESSION['DATScell'];
             $engine = $_SESSION['DATSengine'];
             
           } else {
           
             while($row = fgetcsv($fp, 1024, ';')) {
               
               // Skip the first line
               if (preg_match("/^##/", $row[0])) { continue; }
               
               if (array_search($row[2], $cell) === false) {
                 $cell[] = $row[2];
               } // End if statement
               
               if (array_search($row[3], $engine) === false) {
                 $engine[] = $row[3];
               } // End if statement
               
            } // End while loop
             
            // Close the index file
            fclose($fp);
              
            // Replace '' and ' ' with a single blank line
            for($i = 0; $i < count($cell); $i++) {
              if ($cell[$i] == '') {
                $cell[$i] = ' ';
              } // End if statement
            } // End for loop
  
            // Replace '' and ' ' with a single blank line
            for($i = 0; $i < count($engine); $i++) {
              if ($engine[$i] == '') {
                $engine[$i] = ' ';
              } // End if statement
            } // End for loop
  
            // Identify the unique elements in the cell and engine arrays (and reset the array keys)
            $cell = array_values(array_unique($cell));
            $engine = array_values(array_unique($engine));
            
            // Sort the array elements
            sort($cell);
            sort($engine);
            
            // Prepend "All" to each Dropdown selector so it will be the default option
            array_unshift($cell, "All");
            array_unshift($engine, "All");
            
          } // End if - else statement
          
          // Create Dropdown selectors for these three results
          echo "<tr><td class=\"formLabel\">Cell</td><td><select id=\"cell\" name=\"cell[]\" multiple=\"multiple\" size=\"7\">";
          if (isset($_POST['cell'])) {
            for($i = 0; $i < count($cell); $i++) {
              ?><option value="<?php echo $cell[$i]; ?>" <?php echo array_search($cell[$i], $_POST['cell']) !== false ? "selected='selected'" : ""; ?>><?php echo $cell[$i]; ?></option><?php
            } // End for loop
          } else {
            for($i = 0; $i < count($cell); $i++) {
              ?><option value="<?php echo $cell[$i]; ?>"><?php echo $cell[$i]; ?></option><?php
            } // End for loop
          } // End if - else statement
           
          echo "</select></td></tr><tr><td class=\"formLabel\">Engine</td><td>\n\t<select id=\"engine\" name=\"engine[]\" multiple=\"multiple\" size=\"7\">";
          for($i = 0; $i < count($engine); $i++) {
            if (isset($_POST['engine'])) {
              ?><option value="<?php echo $engine[$i]; ?>" <?php echo array_search($engine[$i], $_POST['engine']) !== false ? "selected='selected'" : ""; ?>><?php echo $engine[$i]; ?></option><?php
            } else {
              ?><option value="<?php echo $engine[$i]; ?>"><?php echo $engine[$i]; ?></option><?php
            } // End if - else statement
          } // End for loop
          
          echo "</select></td></tr>\n"; 
          
          if (!isset($_POST['cell'])) {
            ?><script type="text/javascript">
              //<!--
              document.getElementById('cell').selectedIndex = '0';
              document.getElementById('engine').selectedIndex = '0';
              //-->
              </script>
            <?php
          } // End if statement
        
          // Save the arrays in the SESSION variable to remove loading time after reading the index file once
          $_SESSION['DATScell'] = $cell;
          $_SESSION['DATSengine'] = $engine;
          
          // Free up memory space
          unset($cell);
          unset($engine);
        ?>
        
        <!-- Create the rest of the fields for the form.  The date fields also have a hidden text next to them. -->
        <!-- This is the error text that will appear if the validation fails                                    -->
        <tr><td class="formLabel">Serial Number</td><td><input type="text" name="serial" value="<?php echo $_POST["serial"]; ?>" /></td></tr>
        <tr><td class="formLabel">Begin Date</td><td><input type="text" name="bDate" value="<?php echo $_POST["bDate"]; ?>" />&nbsp;(i.e. 01/01/2006, 3/8/2002, 7/21/1999) </td><td class="invalLabel"><span id="inval3" style="display: none; color: red; font-weight: bold;">Invalid Date Entered!</span></td></tr>
        <tr><td class="formLabel">End Date</td><td><input type="text" name="eDate" value="<?php echo $_POST["eDate"]; ?>" />&nbsp;(i.e. 01/01/2006, 3/8/2002, 7/21/1999) </td><td class="invalLabel"><span id="inval4" style="display: none; color: red; font-weight: bold;">Invalid Date Entered!</span></td></tr></table>
        <br /><div style="text-align: center;"><input type="submit" name="submitButton" value="Search Now" onclick="document.forms[0].action=''" /><br />
        <input id="resetButton" type="button" value="Reset Fields" onclick="resetFields()" />
        
        <?php 
        
          /* This PHP block is the purpose of the form.  It searches the records in the indexes
           *    according to the criteria entered in the form and populates the dropdown selector
           *    with the results.
           *
           * The search fields have the following functionality:
           *    Cell, Engine, and Run Type: All results not matching the value chosen are ignored,
           *      unless "All" is chosen, in which case all records match
           *    Serial Number, Build, Run, and Comment: If text (including numbers and any symbols)
           *      is entered, that exact value is matched against the appropriate field in the record.
           *      However, if an '*' is entered either at the beginning or end of the text, it acts as
           *      a wildcard, matching any quantity of unknown text.  An '*' my appear at either
           *      or both ends of the text.  If an '*' is entered inside the text, it does NOT act as 
           *      a wildcard and instead becomes part of the string to match.  i.e. '*ial' matches
           *      entries ending with 'ial', 'gold' matches only entries that are exactly 'gold', '112*'
           *      matches any entry starting with '112', and '*standard*run*' would match any entries 
           *      containing 'standard*run' anywhere in them.
           *    Begin Date and End Date: These fields accept only the format "MM/DD/YYYY", and check that
           *      the month is between 01 and 12, the day is between 01 and 31, and the year is greater 
           *      than 1500.
           *
           * Upon clicking the "Search Now" button, the page is refreshed (maintaining the field entries)
           *    and the "Search Results" dropdown selector is populated with the successful matches of
           *    the search.
           */
        
          // Only search on submission
          if ($_POST["cell"] != null) { // (1)
            
            // Setup useful variables
            $results = array();
            $count = 0;
            $cell_s = '/^(';
            $engine_s = '/^(';
            
            // Setup strings to place in the regex pattern to search the file with
//            $date_s = '.*';
//            $calTime_s = '.*';
            
            if ($_POST['cell'][0] == 'All') {
              $cell_s = '/.*/';
            } else if ($_POST['cell'][0] == ' ') {
              $cell_s .= '\s*';
              for ($i = 1; $i < count($_POST['cell']); $i++) {
                $cell_s .= '|' . $_POST['cell'][$i];
              } // End for loop
              $cell_s .= ')$/';
            } else {
              $cell_s .= $_POST['cell'][0];
              for ($i = 1; $i < count($_POST['cell']); $i++) {
                $cell_s .= '|' . $_POST['cell'][$i];
              } // End for loop
              $cell_s .= ')$/';
            } // End if - else if - else statement
            
            if ($_POST['engine'][0] == 'All') {
              $engine_s = '/.*/';
            } else if ($_POST['engine'][0] == ' ') {
              $engine_s .= '\s*';
              for ($i = 1; $i < count($_POST['engine']); $i++) {
                $engine_s .= '|' . $_POST['engine'][$i];
              } // End for loop
              $engine_s .= ')$/';
            } else {
              $engine_s .= $_POST['engine'][0];
              for ($i = 1; $i < count($_POST['engine']); $i++) {
                $engine_s .= '|' . $_POST['engine'][$i];
              } // End for loop
              $engine_s .= ')$/';
            } // End if - else if - else statement
            
//            $partNum_s = '.*';
            $serial_s = $_POST["serial"] != "" ? filterSerial() : '/.*/';
//            $scanTime_s = '.*';
//            $numRecs_s = '.*';
            
            // Create the regex pattern
//            $pattern = '/^' . $date_s . ';' . $calTime_s . ';' . $cell_s . ';' . $engine_s . ';' . $partNum_s . ';' . $serial_s . ';' . $scanTime_s . ';' . $numRecs_s . '.*$/iU';
            
//            echo "<span style=\"position: absolute; top: -100px;\">", $cell_s, "##", $engine_s, "##", $serial_s, "</span>\n";
            
            // Parse the dates entered to UNIX timestamps (for easy comparison), if they exist
            if (preg_match("/(\d{1,2})\/(\d{1,2})\/(\d{4})/", $_POST["bDate"], $matchLow)) {
              $lowTime = mktime(0, 0, 0, $matchLow[1], $matchLow[2], $matchLow[3]);
            } // End if statement
            
            if (preg_match("/(\d{1,2})\/(\d{1,2})\/(\d{4})/", $_POST["eDate"], $matchHigh)) {
              $highTime = mktime(0, 0, 0, $matchHigh[1], $matchHigh[2], $matchHigh[3]);
            } // End if statement
            
            // Open the index file for reading
            $fp = fopen("/usr2/testdata/DATA_FILES.INDX" ,'r');

            // Compare the regex to each entry in the file.  If the regex matches, then compare the date as well.
            while(($row = fgetcsv($fp, 1024, ';')) && ($count <= 1000)) {
//              $row = $row[0];
              if (preg_match($cell_s, $row[2]) && preg_match($engine_s, $row[3]) && preg_match($serial_s, $row[5])) {
                
                // Skip the first line
                if (preg_match("/^##/", $row[0])) { continue; }
               
//                // Create a parsed array of the line
//                $frags = explode(';', $row);
                
                //echo $row;
                //print_r($frags);
                
                // Parse the date to a timestamp
                preg_match("/^\s*(\d{4})(\d{2})(\d{2})\s*$/", $row[0], $match);
                $tempDate = mktime(0, 0, 0, $match[2], $match[3], $match[1]);
                
                // Compare dates
                if (isset($matchLow[0]) && isset($matchHigh[0])) { // If both a begin and end date were entered
                  if (($lowTime <= $tempDate) && ($highTime >= $tempDate)) {
                    $results[] = $row;
                    $count++;
                  } // End if statement
                } else if (isset($matchLow[0])) { // If only a begin date was entered
                  if ($lowTime <= $tempDate) {
                    $results[] = $row;
                    $count++;
                  } // End if statement
                } else if (isset($matchHigh[0])) { // If only an end date was entered
                  if ($highTime >= $tempDate) {
                    $results[] = $row;
                    $count++;
                  } // End if statement
                } else { // If no dates were entered, then ignore dates and place the entry in the results array
                  $results[] = $row;
                  $count++;
                } // End if - else if - else statements
                
              } // End if statement
            } // End for loop
            
            // Close the index file
            fclose($fp);
              
            echo "<script type=\"text/javascript\">\n
                    //<!--\n
                    var searchCount = " . count($results) . ";
                    //-->
                  </script>\n";
                
          } // End if - else statement (1)
          
          if ($_POST["cell"] != null) {
            if ($count <= 1000) {
              echo "<span id=\"resultCount\" >Your Search Returned " . $count . " Results.</span></div><br />"; // End div is to put this in the same element as the search button
            } else {
              echo "<span id=\"resultCount\" >Your Search Returned 1000+ Results.</span></div><br />"; // End div is to put this in the same element as the search button
            } // End if - else statement
          } else {
            echo "<span id=\"resultCount\" ></span></div><br />"; // End div is to put this in the same element as the search button
          } // End if - else statement
          
          ?>
          <div style="text-align: right;"><input type="button" id="downloadButton1" name="submitButton" value="Submit Data Request" disabled="disabled" onclick="document.forms[0].action='<?php echo $myself . 'dats.xfer'; ?>'; validateDlSubmit();"/></div>
          <span class="checkBatch" onclick="checkAll()">Click Here to Select All Achives</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="checkBatch" onclick="uncheckAll()">Click Here to Deselect All Achives</span>
          <?php
          
          if ($_POST["cell"] != null) {
            if ($results != null) {
              // Create the selector from the results of the filtering
              echo "<table id=\"resultsTable\">\n<tr>\n<th>Select<br />Archive</th><th>Test Date</th><th>Offcal Time</th><th>Cell</th><th>Engine Model<br />Number</th><th>Serial Number</th>\n</tr>\n";
              for($i = 0; $i < count($results); $i++) {
                preg_match("/^\s*(\d{4})(\d{2})(\d{2})\s*$/", $results[$i][0], $match);
                echo "<tr>\n<td><input type='checkbox' id='results' name='results[]' value='" . $results[$i][8] . "' /></td><td>" . $match[2] . '/' . $match[3] . '/' . $match[1] . "</td><td>" . $results[$i][1] . "</td><td>" . $results[$i][2] . "</td><td>" . $results[$i][3] . "</td><td>" . $results[$i][5] . "</td>\n</tr>\n";
              } // End for loop
              echo "</table>\n";
            } else {
              echo "<table id=\"resultsTable\">\n<tr>\n<th>Select<br />Archive</th><th>Test Date</th><th>Offcal Time</th><th>Cell</th><th>Engine Model<br />Number</th><th>Serial Number</th>\n</tr>\n<tr>\n<td colspan='6' style='text-align:center;'>Your Search Returned No Results.</td>\n</tr>\n</table>\n";
            } // End if - else statement
          } else { 
            echo "<table id=\"resultsTable\">\n<tr>\n<th>Select<br />Archive</th><th>Test Date</th><th>Offcal Time</th><th>Cell</th><th>Engine Model<br />Number</th><th>Serial Number</th>\n</tr>\n<tr>\n<td colspan='6' style='text-align:center;'>Search Results Will Appear Here.</td>\n</tr>\n</table>\n";
          } // End if statement
          
          ?>
          <span class="checkBatch" onclick="checkAll()">Click Here to Select All Achives</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="checkBatch" onclick="uncheckAll()">Click Here to Deselect All Achives</span>
          <?php
          
//          if ($_POST["cell"] != null) {
//            if ($results != null) {
//              // Create the selector from the results of the filtering
//              echo "<td><select id=\"searchList\" name=\"results[]\" multiple=\"true\" size=\"7\">";
//              for($i = 0; $i < count($results); $i++) {
//                echo "<option value=\"" . $results[$i] . "\">" . $results[$i] . "</option>";
//              } // End for loop
//              echo "</select></td></tr>\n";
//            } else {
//              echo "<td><select id=\"searchList\" name=\"results\" multiple=\"multiple\" size=\"7\"><option value=\"noResults\">Your Search Returned No Results</option></select></td></tr>";
//            } // End if - else statement
//          } else { 
//            echo "<td><select id=\"searchList\" name=\"results\" multiple=\"multiple\" size=\"7\"><option value=\"default\">Search Results Will Appear Here</option></select></td></tr>";
//          } // End if statement

        ?>
        
        <br />
        <div style="text-align: right;"><input type="button" id="downloadButton2" name="submitButton" value="Submit Data Request" disabled="disabled" onclick="document.forms[0].action='<?php echo $myself . 'dats.xfer'; ?>'; validateDlSubmit();"/></div>
        
      </div></form>

    </div>
    <br />
    
    <div id="hitCounter">
      <?php
        $hit = file("DATS/files/hitCount.txt");
        if (preg_match("/^\d+$/", $hit[0])) {
          if ($_POST["cell"] == null) {
            echo "This page has been viewed <span class=\"hitNum\">";
            echo $hit[0] + 1;
            echo "</span> times!";
            $fp1 = fopen("DATS/files/hitCount.txt", "w");
            fwrite($fp1, $hit[0] + 1);
            fclose($fp1);
          } else {
            echo "This page has been viewed <span class=\"hitNum\">" . $hit[0] . "</span> times!";
          } // End if - else statement
        } else {
          echo "The hitcounter file contains invalid data!";
        } // End if - else statement
      ?>
    </div>

    <?php
      if ($_POST['cell'] != null && count($results) > 0) {
        ?><script type="text/javascript">
          //<!--
          document.getElementById('downloadButton1').disabled = false;
          document.getElementById('downloadButton2').disabled = false; <?php
          ?>//-->
        </script><?php
      } // End if statement
    ?>





<?php 
  /***************************************************************************
   *****                          PHP Functions                          *****
   ***************************************************************************/

  /* Function filterSerial()
   * 
   * This function uses the $_POST superglobal variable to retreive the user's input
   * in the "serial" field of the form and construct a regex expression to add to the 
   * main pattern.  Asterisks at the start and end of the string are accounted for and
   * removed, if present.
   *
   * @return A string containing the regex segment to be placed in the main pattern.
   */
  function filterSerial() {
    
    $retval = "";
    
    // Locate the first and last occurances of '*' in the string
    $first = strpos($_POST["serial"], "*");
    $last = strrpos($_POST["serial"], "*");

//    echo $first . " :: " . $last . " :: " . (strlen($_POST["serial"]) - 1) . "\n";
    
    // Check if there was an * entered as a wildcard
    if (($last != 0) && $first == 0 && ($last == strlen($_POST["serial"]) - 1)) {
      
      // Remove the wildcards from the search string
      $searchString = "/^.*" . substr($_POST["serial"], 1, strlen($_POST["serial"]) - 2) . ".*$/";
      
//      echo "First: $searchString\n";
      
    } else if (!is_bool($first) && $first == 0) {
      
      // Remove the wildcards from the search string
      $searchString = "/^.*" . substr($_POST["serial"], 1) . '$/';
      
//      echo "Second: $searchString\n";
      
    } else if (($last != 0) && ($last == strlen($_POST["serial"]) - 1)) {
      
      // Remove the wildcards from the search string
      $searchString = "/^" . substr($_POST["serial"], 0, strlen($_POST["serial"]) - 1) . ".*$/";
      
//      echo "Third: $searchString\n";
      
    } else {
      
      // Create a variable that's usable inside a regular expression
      $searchString = '/^' . $_POST["serial"] . '$/';
      
//      echo "Fourth: $searchString\n";
      
    } // End if - else if - else statements
    
    return $searchString;
      
  } // End function filterSerial

  /***************************************************************************
   *****                        End PHP Functions                        *****
   ***************************************************************************/
?>

