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
    
    <p style="text-align:center"><span id="welcomeHeading">CGI Script Execution</span></p>
    
    <p style="text-align:center">The Status of the Operation is Shown Below</p>
    <!-- -->
    
    <!-- Container for all the recall form stuff -->
    <div id="cgiContainer">
      <?php
      
      switch($_GET['cgi']) {
        
        case 'eu_xfer':
          $commandString = "perl DATS/files/bin_eu_xfer.cgi 'dir=" . $_GET['dir'] . "'";
          break;
        case 'ttape_xfer':
          $commandString = "perl DATS/files/ttape_xfer.cgi 'dir=" . $_GET['dir'] . "&average=" . $_GET['average'] . "'";
          break;
        case 'performance':
          $commandString = "perl DATS/files/performance.cgi 'dir=" . $_GET['dir'] . "'";
          break;
        case 'eulog':
          $commandString = "perl DATS/files/eulog.cgi 'dir=" . $_GET['dir'] . "&average=" . $_GET['average'] . "'";
          break;
        case 'edit_msedek':
          if ($_SESSION['editRestrict'] == '0') {
            $commandString = "perl DATS/files/edit_msedex.cgi 'dir=" . $_GET['dir'] . "'";
          } else {
            echo "You are not authorized to edit files.  Please contact the content owner if you feel this is in error.";
            $commandString = "";
          } // End if - else statement
          break;
        default:
          echo "ERROR:  The selected cgi script (" . $_GET['cgi'] . ") is not a recognized script.";
          $commandString = "";
          break;
          
      } // End switch statement
      
//      echo '<br />' . $commandString . '<br />';
      
      $output = shell_exec($commandString);
      
      echo $output;
      
      ?>
    </div>
    
    