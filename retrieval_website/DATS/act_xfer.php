    <?php echo $header; ?>

    <!-- act_xfer.php                                                                                     -->
    <!--                                                                                                  -->
    <!-- This file links the system back to the original Perl scripts.  Eventually they will be replaced  -->
    <!-- with PHP.  In the interm, this file will call popen() to run the Perl script that transfers the  -->
    <!-- archives to temporary directories.                                                               -->
    <!--                                                                                                  -->
    <!-- Author:  Eric Shields                                                                            -->
    
    <!-- Heading information displayed on page -->
    <div id="sbuHeading">Data &amp; Automation</div>
    <div id="dateHeading"><script type="text/javascript">writeFormattedDate();</script></div>
    
    <p style="text-align:center"><span id="welcomeHeading">Manipulate Archive(s)</span></p>
    
    <p style="text-align:center">Please select from the options listed below.</p>
    <!-- -->
    
    <!-- Container for all the recall form stuff -->
    <div id="cgiContainer">
      <?php
      
      $frags = $_POST['results'];
        
//      print_r($_POST);
//      echo "<br />";
//      print_r($frags);
      
      $commandString = "perl DATS/files/dig_data_xfer.cgi '";
      
      for ($i = 0; $i < count($frags); $i++) {
        $commandString .= ($i != count($frags) - 1) ? 'fn=' . $frags[$i] . "&" : 'fn=' . $frags[$i] . "'";
      } // End for loop
      
//      echo '<br />' . $commandString . '<br />';
      
      $output = shell_exec($commandString);
      
      echo $output;
      
      ?>
    </div>
    
    