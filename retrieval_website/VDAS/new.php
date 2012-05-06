  <?php echo $header ?>

  <!-- new.php                                                                                          -->
  <!--                                                                                                  -->
  <!-- This file reads in the file "files/VDAS_whatsnew.txt" and outputs it in a formatted box.         -->
  <!--                                                                                                  -->
  <!-- Author:  Eric Shields                                                                            -->
   
    <div id="sbuHeading">Data &amp; Automation</div>
    <div id="dateHeading"><script type="text/javascript">writeFormattedDate();</script></div>
    
    <p style="text-align:center"><span id="welcomeHeading">What's New with VDAS?</span></p>
    
    <p style="text-align:center">Here's the latest in the "World of VDAS".</p>
    <!-- -->
    
    <!-- Container for the announcements -->
    <div id="new">
      <?php // Read in the what's new file and display it inside the box.  TABS AND GROUPS OF SPACES WILL NOT BE DISPLAYED, all groups of spaces will be displayed as 1 space.
        $newTextArray = file("VDAS/files/VDAS_whatsnew.txt");
        
        // Output the announcement file, one line at a time verbatum
        for ($i = 0; $i < count($newTextArray); $i++) {
          echo $newTextArray[$i] . "<br />";
        }
      ?>
    </div>
    <br />
