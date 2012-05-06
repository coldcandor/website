  <?php echo $header; ?>

  <!-- inv.php                                                                                          -->
  <!--                                                                                                  -->
  <!-- This file provides a dropdown selector to choose which type of inventory to view.  Each type is  -->
  <!-- dealt with in a seperate file by the appropriate name.                                           -->
  <!--                                                                                                  -->
  <!-- Author:  Eric Shields                                                                            -->
   
    <!-- Heading information displayed on page -->
    <div id="sbuHeading">Data &amp; Automation</div>
    <div id="dateHeading"><script type="text/javascript">writeFormattedDate();</script></div>
    
    <p style="text-align:center"><span id="welcomeHeading">View VDAS Inventory</span></p>
    
    <p style="text-align:center">Select the VDAS hardware and then press the "View" button.</p>
    <!-- -->
    
    <!-- Container for the form -->    
    <div id="inv">
      <form id="invForm" method="post" action=""><div><br />
        <select name="hardware">
          <option value="frontEnd">B&amp;K FrontEnd</option>
          <option value="PC" <?php echo $_POST['hardware'] == 'PC' ? "selected=\"selected\"" : ""; ?>>PC</option>
          <option value="freq" <?php echo $_POST['hardware'] == 'freq' ? "selected=\"selected\"" : ""; ?>>Frequency Divider</option>
          <option value="oil" <?php echo $_POST['hardware'] == 'oil' ? "selected=\"selected\"" : ""; ?>>Type K Thermocouple</option>
        </select><br />
        <input type="submit" value="View" />
      </div></form>
    </div>
    <br />
    <br />
      
      <?php
        // Save the hardware type for use with the editor
        $_SESSION['hardware'] = $_POST['hardware'];
      
        // Open the appropriate file, according to the form input
        switch ($_POST["hardware"]) {
          case "frontEnd":
            ?>
            <!-- Container for the HTML table -->    
            <div id="inv_sub">
              <?php
                // Read in the file
                $info = file("VDAS/files/inventory/inv_frontEnd.csv");
                
                // Replace '&' with HTML element to avoid validation issues
                for ($i = 0; $i < count($info); $i++) {
                  $info[$i] = str_replace("&", "&amp;", $info[$i]);
                } // End for loop
                
                // Parse each entry
                for ($i = 0; $i < count($info); $i++) {
                  $infoFrags[$i] = explode(",", $info[$i]);
                } // End for loop
                
                // Create the table
                echo "<table class=\"vdasTable\">\n";
                
                // Create the header row
                echo "  <tr style=\"font-weight: bold;\">\n";
                for ($j = 0; $j < count($infoFrags[0]); $j++) {
                  echo "    <td>" . $infoFrags[0][$j] . "</td>\n";
                } // End for loop (j)
                echo "  </tr>\n";
        
                // Create each additional row
                for ($i = 1; $i < count($infoFrags); $i++) {
                  echo "  <tr>\n";
                  for ($j = 0; $j < count($infoFrags[$i]); $j++) {
                    echo "    <td>" . $infoFrags[$i][$j] . "</td>\n";
                  } // End for loop (j)
                  echo "  </tr>\n";
                } // End for loop (i)
                
                // End the table
                echo "</table>\n";
              ?>
            </div>
            <br />
            <?php
            break;                                                       
          case "PC":
            ?>
            <!-- Container for the HTML table -->    
            <div id="inv_sub">
              <?php
                // Read in the file
                $info = file("VDAS/files/inventory/inv_PC.csv");
                
                // Parse each entry
                for ($i = 0; $i < count($info); $i++) {
                  $infoFrags[$i] = explode(",", $info[$i]);
                }
                
                // Create the table
                echo "<table class=\"vdasTable\">\n";
                
                // Create the header row
                echo "  <tr style=\"font-weight: bold;\">\n";
                for ($j = 0; $j < count($infoFrags[0]); $j++) {
                  echo "    <td>" . $infoFrags[0][$j] . "</td>\n";
                } // End for loop (j)
                echo "  </tr>\n";
        
                // Create each additional row
                for ($i = 1; $i < count($infoFrags); $i++) {
                  echo "  <tr>\n";
                  for ($j = 0; $j < count($infoFrags[$i]); $j++) {
                    echo "    <td>" . $infoFrags[$i][$j] . "</td>\n";
                  } // End for loop (j)
                  echo "  </tr>\n";
                } // End for loop (i)
                
                echo "</table>\n";
              ?>
            </div>
            <br />
            <?php
            break;                                                       
          case "freq":                                                   
            ?>
            <!-- Container for the HTML table -->    
            <div id="inv_sub">
              <?php
                // Read in the file
                $info = file("VDAS/files/inventory/inv_freq.csv");
                
                // Parse each entry
                for ($i = 0; $i < count($info); $i++) {
                  $infoFrags[$i] = explode(",", $info[$i]);
                }
                
                // Create the table
                echo "<table class=\"vdasTable\">\n";
                
                // Create the header row
                echo "  <tr style=\"font-weight: bold;\">\n";
                for ($j = 0; $j < count($infoFrags[0]); $j++) {
                  echo "    <td>" . $infoFrags[0][$j] . "</td>\n";
                } // End for loop (j)
                echo "  </tr>\n";
        
                // Create each additional row
                for ($i = 1; $i < count($infoFrags); $i++) {
                  echo "  <tr>\n";
                  for ($j = 0; $j < count($infoFrags[$i]); $j++) {
                    echo "    <td>" . $infoFrags[$i][$j] . "</td>\n";
                  } // End for loop (j)
                  echo "  </tr>\n";
                } // End for loop (i)
                
                echo "</table>\n";
              ?>
            </div>
            <br />
            <?php
            break;                                                       
          case "oil":                                                    
            ?>
            <!-- Container for the HTML table -->    
            <div id="inv_sub">
              <?php
                // Read in the file
                $info = file("VDAS/files/inventory/inv_oil.csv");
                
                // Parse each entry
                for ($i = 0; $i < count($info); $i++) {
                  $infoFrags[$i] = explode(",", $info[$i]);
                }
                
                // Create the table
                echo "<table class=\"vdasTable\">\n";
                
                // Create the header row
                echo "  <tr style=\"font-weight: bold;\">\n";
                for ($j = 0; $j < count($infoFrags[0]); $j++) {
                  echo "    <td>" . $infoFrags[0][$j] . "</td>\n";
                } // End for loop (j)
                echo "  </tr>\n";
        
                // Create each additional row
                for ($i = 1; $i < count($infoFrags); $i++) {
                  echo "  <tr>\n";
                  for ($j = 0; $j < count($infoFrags[$i]); $j++) {
                    echo "    <td>" . $infoFrags[$i][$j] . "</td>\n";
                  } // End for loop (j)
                  echo "  </tr>\n";
                } // End for loop (i)
                
                echo "</table>\n";
              ?>
            </div>
            <br />
            <?php
            break;
        } // End switch statement
      ?>
    <br />
    