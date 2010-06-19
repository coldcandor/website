    <?php echo $header; ?>
    
    <!-- summary.php                                                            -->
    <!--                                                                        -->
    <!-- This page contains a summary of what the VDAS and DATS data retrieval  -->
    <!-- sites are and links to each.                                           -->
    <!--                                                                        -->
    <!-- Author:  Eric Shields                                                  -->
    
    <?php if ($_GET['fuseaction'] == 'login.auth') { ?>
      <!-- The URL still showed a login fuseaction, correcting it to the vdas fuseaction to avoid search issues -->
      <script type="text/javascript">
        //<!--
        document.location = "<?php echo $myself . 'login.summary'; ?>";
        //-->
      </script>
    <?php } ?>
         
    <!-- Heading information displayed on page -->
    <div id="sbuHeading">Data &amp; Automation</div>
    <div id="dateHeading"><script type="text/javascript">writeFormattedDate();</script></div>
    
    <p style="text-align:center"><span id="welcomeHeading">Data Retrieval Site Summary</span></p>
    <!-- -->
    
    <!-- Container for the Summary -->    
    <br />
    <div id="summary">
      <h3>Use VDAS Data Archive Search for:</h3>
      <ul>
        <li>Viewing previously reduced VDAS runs; sale page summaries and plots</li>
        <li>Viewing an inventory of VDAS hardware</li>
        <li>Viewing user manuals and wiring diagrams</li>
        <li>Viewing other documentation related to VDAS</li>
        <li>Viewing IP addresses of currently active VDAS systems</li>
        <li>Giving feedback to the VDAS developers</li>
        <li>Learning what's new about VDAS</li>
      </ul>
      <a href="<?php echo $myself . 'vdas.recall'; ?>">VDAS Data retrieval</a><br />
      <br />
      <h1>DATS Test Data Archive</h1>
      <p>This is an archive of steady state engine and component test data.  Most of it was acquired using a Lab DATS data acquisition system.  The following test systems store data in this archive:</p>
      <ul>
        <li>Phoenix, AZ - Flight Test Berg System
        <li>Phoenix, AZ - Lab DATS
        <li>Santan, AZ - Lab DATS
        <li>Greer, SC - HP1000 System (2000-current)
      <li>Tempe, AZ - Lab DATS
      </ul>
      
      <h3>Use the DATS Data Archive Search to:</h3>
      <ul>
       <li>View files associated with data sets
       <li>Resend data sets that have expired off of the Engineering archive (/grp/labdata, DrMain, etc)
       <li>Retrieve entire data sets to your local directory
       <li>Copy data sets to a Lab Vax for data reduction
       <li>Run data reduction programs
      </ul>
      <a href="<?php echo $myself . 'dats.recall'; ?>">DATS Data retrieval</a>
    </div>
    <br />
    