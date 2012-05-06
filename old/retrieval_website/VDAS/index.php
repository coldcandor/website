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
    
    <p style="text-align:center"><span id="welcomeHeading">Recall VDAS Data</span></p>
    
    <p style="text-align:center">Select the criteria for your search and then press the "Search Now" button.</p>
    <!-- -->
    
    <!-- Container for all the recall form stuff -->
    <div id="recallContainer">
    
      <!-- Start of the form that performs the filtering of the records -->
      <form id="recallForm" action="" onsubmit="return validate()" method="post"><div>
      
        <table class="noFormatTable">
      
        <!-- Create radio buttons for system and record selection.  The embedded PHP sets values according to what was submitted in the form.  The VAX radio button has been set to display: none to remove confusion until VAX functionality is put in place. -->
        <tr><td class="formLabel">Record Type</td><td><select id="selector" name="record"><option value="both">SALE and PLOT</option><option value="sale">SALE</option><option value="plot">PLOT</option></select></td></tr>

        <?php 
        
          /*****************************************************************************
           * This PHP block reads in the index files, concatenates them together, 
           * and creates the cell, engine, and runType dropdown selectors, prepopulated
           * with the appropriate entries from the indexes.
           *****************************************************************************/
        
          // Read the index files into an seperate arrays (1 line per element)
          if (!($saleIndex = file("VDAS/files/Copy of SearchSaleReportsList.txt"))) { echo "<script type=\"text/javascript\">//<!--alert(\"Unable to access the SALE Report Index!  The page will stop loading.\\nPlease Contact David Bluestein.  Refer to the \\\"Contact Us\\\" Page for contact info.\")//--></script>"; return; }
          if (!($plotIndex = file("VDAS/files/Copy of SearchPlotReportsList.txt"))) { echo "<script type=\"text/javascript\">//<!--alert(\"Unable to access the PLOT Report Index!  The page will stop loading.\\nPlease Contact David Bluestein.  Refer to the \\\"Contact Us\\\" Page for contact info.\")//--></script>"; return; }
            
          // Append the PLOT index to the end of the SALE index
          $index = array_merge($saleIndex, $plotIndex);
          
          // Tokenize the index
          for ($i = 0; $i < count($index); $i++) {
            $frags[] = explode("~~", $index[$i]);
          } // End for loop
          
          // Organize the fragments
          for ($i = 0; $i < count($frags); $i++) {
            $cell[] = $frags[$i][0];
            $engine[] = $frags[$i][1];
            $runType[] = $frags[$i][2];
            $filename[] = $frags[$i][7];
            
            // Parse the date from the filename
            preg_match("/^.+_(\d{4})(\d{2})(\d{2})_\d+\.\w{3}\s*$/", $frags[$i][7], $match); // NOTE:  This will fail if any of the parts of the filename previous to the date code have the same number of digits!!
            $date[] = mktime(0, 0, 0, $match[2], $match[3], $match[1]);
          } // End for loop
          
          // Identify the unique elements in the cell, engine, and runType arrays (and reset the array keys)
          $cell = array_values(array_unique($cell));
          $engine = array_values(array_unique($engine));
          $runType = array_values(array_unique($runType));
          
          // Sort the array elements
          sort($cell);
          sort($engine);
          sort($runType);
          
          // Prepend "All" to each Dropdown selector so it will be the default option
          array_unshift($cell, "All");
          array_unshift($engine, "All");
          array_unshift($runType, "All");
          
          // Create Dropdown selectors for these three results
          // Create Dropdown selectors for these three results
          echo "<tr><td class=\"formLabel\">Cell</td><td><select id=\"cell\" name=\"cell[]\" multiple=\"multiple\" size=\"4\">";
          if (isset($_POST['cell'])) {
            for($i = 0; $i < count($cell); $i++) {
              ?><option value="<?php echo $cell[$i]; ?>" <?php echo array_search($cell[$i], $_POST['cell']) !== false ? "selected='selected'" : ""; ?>><?php echo $cell[$i]; ?></option><?php
            } // End for loop
          } else {
            for($i = 0; $i < count($cell); $i++) {
              ?><option value="<?php echo $cell[$i]; ?>"><?php echo $cell[$i]; ?></option><?php
            } // End for loop
          } // End if - else statement
           
          echo "</select></td></tr><tr><td class=\"formLabel\">Engine</td><td>\n\t<select id=\"engine\" name=\"engine[]\" multiple=\"multiple\" size=\"4\">";
          for($i = 0; $i < count($engine); $i++) {
            if (isset($_POST['engine'])) {
              ?><option value="<?php echo $engine[$i]; ?>" <?php echo array_search($engine[$i], $_POST['engine']) !== false ? "selected='selected'" : ""; ?>><?php echo $engine[$i]; ?></option><?php
            } else {
              ?><option value="<?php echo $engine[$i]; ?>"><?php echo $engine[$i]; ?></option><?php
            } // End if - else statement
          } // End for loop
          
          echo "</select></td></tr><tr><td class=\"formLabel\">runType</td><td>\n\t<select id=\"runType\" name=\"runType[]\" multiple=\"multiple\" size=\"4\">";
          for($i = 0; $i < count($runType); $i++) {
            if (isset($_POST['runType'])) {
              ?><option value="<?php echo $runType[$i]; ?>" <?php echo array_search($runType[$i], $_POST['runType']) !== false ? "selected='selected'" : ""; ?>><?php echo $runType[$i]; ?></option><?php
            } else {
              ?><option value="<?php echo $runType[$i]; ?>"><?php echo $runType[$i]; ?></option><?php
            } // End if - else statement
          } // End for loop
          
          echo "</select></td></tr>\n"; 
          
          if (!isset($_POST['cell'])) {
            ?><script type="text/javascript">
              //<!--
              document.getElementById('cell').selectedIndex = '0';
              document.getElementById('engine').selectedIndex = '0';
              document.getElementById('runType').selectedIndex = '0';
              //-->
              </script>
            <?php
          } // End if statement
        
            // Free up memory
            unset($cell);
            unset($engine);
            unset($runType);
        ?>
        
        <!-- Create the rest of the fields for the form.  The date fields also have a hidden text next to them. -->
        <!-- This is the error text that will appear if the validation fails                                    -->
        <tr><td class="formLabel">Serial Number</td><td><input type="text" name="serial" value="<?php echo $_POST["serial"]; ?>" /></td></tr>
        <tr><td class="formLabel">Build</td><td><input type="text" name="build" value="<?php echo $_POST["build"]; ?>" /></td></tr>
        <tr><td class="formLabel">Run</td><td><input type="text" name="run" value="<?php echo $_POST["run"]; ?>" /></td></tr>
        <tr><td class="formLabel">Comment</td><td><input type="text" name="comment" value="<?php echo $_POST["comment"]; ?>" /></td></tr>
        <tr><td class="formLabel">Begin Date</td><td><input type="text" name="bDate" value="<?php echo $_POST["bDate"]; ?>" />&nbsp;(i.e. 01/01/2006, 3/8/2002, 7/21/1999) </td><td class="invalLabel"><span id="inval3" style="display: none; color: red; font-weight: bold;">Invalid Date Entered!</span></td></tr>
        <tr><td class="formLabel">End Date</td><td><input type="text" name="eDate" value="<?php echo $_POST["eDate"]; ?>" />&nbsp;(i.e. 01/01/2006, 3/8/2002, 7/21/1999) </td><td class="invalLabel"><span id="inval4" style="display: none; color: red; font-weight: bold;">Invalid Date Entered!</span></td></tr></table>
        <br /><div style="text-align: center;"><input type="submit" name="submitButton" value="Search Now" onclick="document.forms[0].action=''" /><br />
        <input id="resetButton" type="button" value="Reset Fields" onclick="resetFields()" />
        
        <!-- This PHP-created script sets the form fields to the values submitted, thus -->
        <!-- appearing to the user that the fields remained holding the values entered  -->
        <script type="text/javascript">
          //<!-- Prevent validator and old browser errors
          <?php 
          
            // Set the record, cell, engine, and run type dropdown selectors to the submitted value
          
            // Record
            if ($_POST["record"] != null) {
              if ($_POST["record"] == "sale") {
                echo "document.forms[0].record.selectedIndex = 1;\n";
              } else if ($_POST["record"] == "plot") {
                echo "document.forms[0].record.selectedIndex = 2;\n";
              } // End if - else if statement
            } // End if statement
          ?>
          //-->
        </script>
        
        <?php 
        
          /* This PHP block is the purpose of the form.  It searches the records in the indexes
           *    according to the criteria entered in the form and populates the dropdown selector
           *    with the results.
           *
           * The search fields have the following functionality:
           *    Cell, Engine, and Run Type: All results not matching the value(s) chosen are ignored,
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
           *    Begin Date and End Date: These fields accept the format "[M]M/[D]D/YYYY".  Additional 
           *      checks are preformed by the javascript validator.
           *
           * Upon clicking the "Search Now" button, the page is refreshed (maintaining the field entries)
           *    and the "Search Results" dropdown selector is populated with the successful matches of
           *    the search.
           */
        
          // Only search on submission
          if ($_POST["cell"] != null) { // (1)
            
            // Setup useful variables
            $saleCount = count($saleIndex);
            $plotCount = count($plotIndex);
            $iType = "sale";
            $results = array();
            $cell_s = '(';
            $engine_s = '(';
            $runType_s = '(';
            
            // Check if this search includes PLOT records
            if ($_POST["record"] == "plot") {
              $iType = "plot";
            } else if ($_POST["record"] == "both") {
              $iType = "both";
            } // End if - else if statement
            
            // Setup strings to place in the regex pattern to search the file with
            if ($_POST['cell'][0] == 'All') {
              $cell_s = '.*';
            } else {
              $cell_s .= $_POST['cell'][0];
              for ($i = 1; $i < count($_POST['cell']); $i++) {
                $cell_s .= '|' . $_POST['cell'][$i];
              } // End for loop
              $cell_s .= ')';
            } // End if - else statement
            
            if ($_POST['engine'][0] == 'All') {
              $engine_s = '.*';
            } else {
              $engine_s .= $_POST['engine'][0];
              for ($i = 1; $i < count($_POST['engine']); $i++) {
                $engine_s .= '|' . $_POST['engine'][$i];
              } // End for loop
              $engine_s .= ')';
            } // End if - else statement
            
            if ($_POST['runType'][0] == 'All') {
              $runType_s = '.*';
            } else {
              $runType_s .= $_POST['runType'][0];
              for ($i = 1; $i < count($_POST['runType']); $i++) {
                $runType_s .= '|' . $_POST['runType'][$i];
              } // End for loop
              $runType_s .= ')';
            } // End if - else statement
            
            $serial_s = $_POST["serial"] != "" ? filterSerial() : '.*';
            $build_s = $_POST["build"] != "" ? filterBuild() : '.*';
            $run_s = $_POST["run"] != "" ? filterRun() : '.*';
            $comment_s = $_POST["comment"] != "" ? filterComment() : '.*';
            
            // Create the regex pattern
            $pattern = '/^' . $cell_s . '~~' . $engine_s . '~~' . $runType_s . '~~' . $serial_s . '~~' . $build_s . '~~' . $run_s . '~~' . $comment_s . '~~' . '.+\.xls\s*$/iU';
            
//            echo "<span style=\"position: absolute; top: -100px;\">", $pattern, "</span>\n";
            
            // Parse the dates entered to UNIX timestamps (for easy comparison), if they exist
            if (preg_match("/(\d{1,2})\/(\d{1,2})\/(\d{4})/", $_POST["bDate"], $matchLow)) {
              $lowTime = mktime(0, 0, 0, $matchLow[1], $matchLow[2], $matchLow[3]);
            } // End if statement
            
            if (preg_match("/(\d{1,2})\/(\d{1,2})\/(\d{4})/", $_POST["eDate"], $matchHigh)) {
              $highTime = mktime(0, 0, 0, $matchHigh[1], $matchHigh[2], $matchHigh[3]);
            } // End if statement
            
            // Compare the regex to each entry in the file.  If the regex matches, then compare the date as well.
            for ($i = 0; $i < count($index); $i++) {
              if (preg_match($pattern, $index[$i])) {
                if (isset($matchLow[0]) && isset($matchHigh[0])) { // If both a begin and end date were entered
                  if (($lowTime <= $date[$i]) && ($highTime >= $date[$i])) {
                    $resultIndex[$i] = "match";
                  } // End if statement
                } else if (isset($matchLow[0])) { // If only a begin date was entered
                  if ($lowTime <= $date[$i]) {
                    $resultIndex[$i] = "match";
                  } // End if statement
                } else if (isset($matchHigh[0])) { // If only an end date was entered
                  if ($highTime >= $date[$i]) {
                    $resultIndex[$i] = "match";
                  } // End if statement
                } else { // If no dates were entered, then ignore dates and place the entry in the results array
                  $resultIndex[$i] = "match";
                } // End if - else if - else statements
              } // End if statement
            } // End for loop
            
            // Check if there were any results.  If there were, iterrate through the original fragment array and pick out the appropriate filenames
            switch ($iType) {
              case "both":
                
                if ($resultIndex != null) {
                  while (list($i, $dontUse) = each($resultIndex)) {
                    $results[] = $frags[$i][7];
                  } // End while loop
                } // End if statement

                break; // "both"
              case "sale":
                
                if ($resultIndex != null) {
                  while (list($i, $dontUse) = each($resultIndex)) {
                    if ($i < $saleCount) {
                      $results[] = $frags[$i][7];
                    } // End if statement
                  } // End while loop
                } // End if statement

                break; // "sale"
              case "plot":
                
                if ($resultIndex != null) {
                  while (list($i, $dontUse) = each($resultIndex)) {
                    if ($i >= $saleCount) {
                      $results[] = $frags[$i][7];
                    } // End if statement
                  } // End while loop
                } // End if statement

                break; // "plot"
            } // End switch statement
            
            echo "<script type=\"text/javascript\">\n
                    //<!--\n
                    var searchCount = " . count($results) . ";
                    //-->
                  </script>\n";
                
          } // End if - else statement (1)
          
          if ($_POST["cell"] != null) {
            if (count($results) <= 1000) {
              echo "<span id=\"resultCount\" >Your Search Returned " . count($results) . " Results.</span></div><br />"; // End the div that contains this and the search button
            } else {
              echo "<span id=\"resultCount\" >Your Search Returned 1000+ Results.</span></div><br />"; // End the div that contains this and the search button
            } // End if - else statement
          } else {
            echo "<span id=\"resultCount\" ></span></div><br />"; // End the div that contains this and the search button
          } // End if - else statement
                
          ?>
          <div style="text-align: right;"><input type="button" id="downloadButton1" name="submitButton" value="Download File(s)" disabled="disabled" onclick="document.forms[0].action='<?php echo $myself . 'vdas.download'; ?>'; validateDlSubmit();"/></div>
          <span class="checkBatch" onclick="checkAll()">Click Here to Select All Files</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="checkBatch" onclick="uncheckAll()">Click Here to Deselect All Files</span>
          <?php
          
          if ($_POST["cell"] != null) {
            if ($results != null) {
              // Create the selector from the results of the filtering
              echo "<table id=\"resultsTable\">\n<tr>\n<th>Select<br />Archive</th><th>Test Date</th><th>Cell</th><th>Engine Model<br />Number</th><th>Run Type</th><th>Serial Number</th><th>Build Number</th><th>Run Number</th><th>Comments</th>\n</tr>\n";
              for($i = 0; $i < count($results); $i++) {
                preg_match("/^.+_(\d{4})(\d{2})(\d{2})_\d+\.\w{3}\s*$/", $frags[$i][7], $match); // NOTE:  This will fail if any of the parts of the filename previous to the date code have the same number of digits!!
                echo "<tr>\n<td><input type='checkbox' id='results' name='results[]' value='" . $frags[$i][7] . "' /></td><td>" . $match[2] . '/' . $match[3] . '/' . $match[1] . "</td><td>" . $frags[$i][0] . "</td><td>" . $frags[$i][1] . "</td><td>" . $frags[$i][2] . "</td><td>" . $frags[$i][3] . "</td><td>" . $frags[$i][4] . "</td><td>" . $frags[$i][5] . "</td><td>" . $frags[$i][6] . "</td>\n</tr>\n";
              } // End for loop
              echo "</table>\n";
            } else {
              echo "<table id=\"resultsTable\">\n<tr>\n<th>Select<br />Archive</th><th>Test Date</th><th>Cell</th><th>Engine Model<br />Number</th><th>Run Type</th><th>Serial Number</th><th>Build Number</th><th>Run Number</th><th>Comments</th>\n</tr><tr>\n<td colspan='9' style='text-align: center'>Your Search Returned No Results.</td>\n</tr>\n</table>\n";
            } // End if - else statement
          } else { 
            echo "<table id=\"resultsTable\">\n<tr>\n<th>Select<br />Archive</th><th>Test Date</th><th>Cell</th><th>Engine Model<br />Number</th><th>Run Type</th><th>Serial Number</th><th>Build Number</th><th>Run Number</th><th>Comments</th>\n</tr>\n<tr>\n<td colspan='9' style='text-align: center'>Search Results will Appear Here.</td>\n</tr>\n</table>\n";
          } // End if statement
          
          ?>
          <span class="checkBatch" onclick="checkAll()">Click Here to Select All Files</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="checkBatch" onclick="uncheckAll()">Click Here to Deselect All Files</span>
          <?php
          
        ?>
        
        <br />
        <div style="text-align: right;"><input type="button" id="downloadButton2" name="submitButton" value="Download File(s)" disabled="disabled" onclick="document.forms[0].action='<?php echo $myself . 'vdas.download'; ?>'; validateDlSubmit();"/></div>
        
      </div></form>

    </div>
    <br />
    
    <div id="hitCounter">
      <?php
        $hit = file("VDAS/files/hitCount.txt");
        if (preg_match("/^\d+$/", $hit[0])) {
          if ($_POST["cell"] == null) {
            echo "This page has been viewed <span class=\"hitNum\">";
            echo $hit[0] + 1;
            echo "</span> times!";
            $fp1 = fopen("VDAS/files/hitCount.txt", "w");
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
      $searchString = ".*" . substr($_POST["serial"], 1, strlen($_POST["serial"]) - 2) . ".*";
      
//      echo "First: $searchString\n";
      
    } else if (!is_bool($first) && $first == 0) {
      
      // Remove the wildcards from the search string
      $searchString = ".*" . substr($_POST["serial"], 1);
      
//      echo "Second: $searchString\n";
      
    } else if (($last != 0) && ($last == strlen($_POST["serial"]) - 1)) {
      
      // Remove the wildcards from the search string
      $searchString = substr($_POST["serial"], 0, strlen($_POST["serial"]) - 1) . ".*";
      
//      echo "Third: $searchString\n";
      
    } else {
      
      // Create a variable that's usable inside a regular expression
      $searchString = $_POST["serial"];
      
//      echo "Fourth: $searchString\n";
      
    } // End if - else if - else statements
    
    return $searchString;
      
  } // End function filterSerial

  /* Function filterBuild()
   * 
   * This function uses the $_POST superglobal variable to retreive the user's input
   * in the "build" field of the form and construct a regex expression to add to the 
   * main pattern.  Asterisks at the start and end of the string are accounted for and
   * removed, if present.
   *
   * @return A string containing the regex segment to be placed in the main pattern.
   */
  function filterBuild() {
    
    $retval = "";
    
    // Locate the first and last occurances of '*' in the string
    $first = strpos($_POST["build"], "*");
    $last = strrpos($_POST["build"], "*");

//    echo $first . " :: " . $last . " :: " . (strlen($_POST["build"]) - 1) . "\n";
    
    // Check if there was an * entered as a wildcard
    if (($last != 0) && $first == 0 && ($last == strlen($_POST["build"]) - 1)) {
      
      // Remove the wildcards from the search string
      $searchString = ".*" . substr($_POST["build"], 1, strlen($_POST["build"]) - 2) . ".*";
      
//      echo "First: $searchString\n";
      
    } else if (!is_bool($first) && $first == 0) {
      
      // Remove the wildcards from the search string
      $searchString = ".*" . substr($_POST["build"], 1);
      
//      echo "Second: $searchString\n";
      
    } else if (($last != 0) && ($last == strlen($_POST["build"]) - 1)) {
      
      // Remove the wildcards from the search string
      $searchString = substr($_POST["build"], 0, strlen($_POST["build"]) - 1) . ".*";
      
//      echo "Third: $searchString\n";
      
    } else {
      
      // Create a variable that's usable inside a regular expression
      $searchString = $_POST["build"];
      
//      echo "Fourth: $searchString\n";
      
    } // End if - else if - else statements
    
    return $searchString;
      
  } // End function filterBuild

  /* Function filterRun()
   * 
   * This function uses the $_POST superglobal variable to retreive the user's input
   * in the "run" field of the form and construct a regex expression to add to the 
   * main pattern.  Asterisks at the start and end of the string are accounted for and
   * removed, if present.
   *
   * @return A string containing the regex segment to be placed in the main pattern.
   */
  function filterRun() {
    
    $retval = "";
    
    // Locate the first and last occurances of '*' in the string
    $first = strpos($_POST["run"], "*");
    $last = strrpos($_POST["run"], "*");

//    echo $first . " :: " . $last . " :: " . (strlen($_POST["run"]) - 1) . "\n";
    
    // Check if there was an * entered as a wildcard
    if (($last != 0) && $first == 0 && ($last == strlen($_POST["run"]) - 1)) {
      
      // Remove the wildcards from the search string
      $searchString = ".*" . substr($_POST["run"], 1, strlen($_POST["run"]) - 2) . ".*";
      
//      echo "First: $searchString\n";
      
    } else if (!is_bool($first) && $first == 0) {
      
      // Remove the wildcards from the search string
      $searchString = ".*" . substr($_POST["run"], 1);
      
//      echo "Second: $searchString\n";
      
    } else if (($last != 0) && ($last == strlen($_POST["run"]) - 1)) {
      
      // Remove the wildcards from the search string
      $searchString = substr($_POST["run"], 0, strlen($_POST["run"]) - 1) . ".*";
      
//      echo "Third: $searchString\n";
      
    } else {
      
      // Create a variable that's usable inside a regular expression
      $searchString = $_POST["run"];
      
//      echo "Fourth: $searchString\n";
      
    } // End if - else if - else statements
    
    return $searchString;
      
  } // End function filterRun

  /* Function filterComment()
   * 
   * This function uses the $_POST superglobal variable to retreive the user's input
   * in the "comment" field of the form and construct a regex expression to add to the 
   * main pattern.  Asterisks at the start and end of the string are accounted for and
   * removed, if present.
   *
   * @return A string containing the regex segment to be placed in the main pattern.
   */
  function filterComment() {
    
    $retval = "";
    
    // Locate the first and last occurances of '*' in the string
    $first = strpos($_POST["comment"], "*");
    $last = strrpos($_POST["comment"], "*");

//    echo $first . " :: " . $last . " :: " . (strlen($_POST["comment"]) - 1) . "\n";
    
    // Check if there was an * entered as a wildcard
    if (($last != 0) && $first == 0 && ($last == strlen($_POST["comment"]) - 1)) {
      
      // Remove the wildcards from the search string
      $searchString = ".*" . substr($_POST["comment"], 1, strlen($_POST["comment"]) - 2) . ".*";
      
//      echo "First: $searchString\n";
      
    } else if (!is_bool($first) && $first == 0) {
      
      // Remove the wildcards from the search string
      $searchString = ".*" . substr($_POST["comment"], 1);
      
//      echo "Second: $searchString\n";
      
    } else if (($last != 0) && ($last == strlen($_POST["comment"]) - 1)) {
      
      // Remove the wildcards from the search string
      $searchString = substr($_POST["comment"], 0, strlen($_POST["comment"]) - 1) . ".*";
      
//      echo "Third: $searchString\n";
      
    } else {
      
      // Create a variable that's usable inside a regular expression
      $searchString = $_POST["comment"];
      
//      echo "Fourth: $searchString\n";
      
    } // End if - else if - else statements
    
    return $searchString;
      
  } // End function filterComment
  
  /***************************************************************************
   *****                        End PHP Functions                        *****
   ***************************************************************************/
?>

