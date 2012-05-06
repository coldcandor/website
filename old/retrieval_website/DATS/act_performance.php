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
    
    <p style="text-align:center"><span id="welcomeHeading">EULog Transfer to Engineering</span></p>
    
    <p style="text-align:center">The Status of the Transfer is Listed Below</p>
    <!-- -->
    
    <!-- Container for all the recall form stuff -->
    <div id="cgiContainer">
      <?php
      
//      print_r($_POST);

      $commandString = "perl DATS/files/performance.cgi 'dir=" . $_GET['dir'] . "'";
      
      echo '<br />' . $commandString . '<br />';
      
//      $output = shell_exec($commandString);
      
      echo $output;
      
      ?>
    </div>
    
    