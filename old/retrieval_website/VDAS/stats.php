<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<!-- Start template includes -->

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
  <title>View VDAS Statistics</title>

  <?php include("global/include/ihLabCSS-JSincludes.php"); ?>

  <style type="text/css" media="all"><?php include("local/css_js/bannerLogo.css"); ?></style>
  <style type="text/css" media="all"><?php include("local/css_js/VDAS.css"); ?></style>

  <script type="text/javascript" src="content_owner_publisher.js"></script>
  
  <script type="text/javascript">
    //<!-- Prevent validator and old browser errors
    
    // For some reason, Internet Explorer refuses to recognize that these variables were created in the same place as those
    // used in the pagePublisher string.  Since this page is not using global includes for the template, but local files
    // instead, it was deemed not worth it to try and track down this problem and simply place these variables here.
    var pageOwnerPhone = "602-231-3079";
    var pageOwnerEmail = "david.bluestein@honeywell.com";
    var pageOwner = "David Bluestein";
    
    var pageOwnerURL = "<a title="+pageOwnerPhone+" href=mailto:"+pageOwnerEmail+"?subject=Website-Contact>"+pageOwner+"</a>";
    var pagePublisherURL = "<a title="+pagePublisherPhone+" href=mailto:"+pagePublisherEmail+"?subject=Website-Contact>"+pagePublisher+"</a>";
    //-->
  </script>
  
  <!-- End template includes (With the exception of VDAS.css, which relates only to this project)       -->
  <!-- Note that the template was slightly modified for validation purposes.                            -->
                                                                                                        
  <!-- stats.php                                                                                        -->
  <!--                                                                                                  -->
  <!-- This file creates a simple form to select the month and year of the desired statistics, then     -->
  <!-- reloads the page with the appropriate information, read in from files in the /files/stats/       -->
  <!-- directory.  The directory structure is as follows:                                               -->
  <!--    files/stats/                                                                                  -->
  <!--      <4-digit year>/                                                                             -->
  <!--        <month_filename>.jpg                                                                      -->
  <!--        <month_filename>.txt                                                                      -->
  <!--                                                                                                  -->
  <!-- Author:  Eric Shields                                                                            -->
   
       
</head>

<body>
<div id="Header">
  
  <!-- Header include from the template -->
  <?php include("global/include/header.html"); ?>
  
</div>

<div id="backgroundImage">  
  <div id="Content">
    
    <!-- Heading information displayed on page -->
    <div id="sbuHeading">Data &amp; Automation</div>
    <div id="dateHeading"><script type="text/javascript">writeFormattedDate();</script></div>
    
    <p style="text-align:center"><span id="welcomeHeading">View VDAS Statistics</span></p>
    
    <p style="text-align:center">Select the month and year and then press the "View" button.</p>
    <!-- -->
    
    <!-- Container for the form or statistics -->    
    <div id="stats">
        <?php
          if ($_POST["DateY"] == null) { // Initial load - create a form with a dropdown for each month and year
            
            // Start the form
            echo "<form id=\"statsForm\" method=\"post\" action=\"\"><div>";
            
            // Get the current date
            $now = getdate();
            
            // Populate the date arrays
            $month = array("Janurary", "Feburary", "March", "April", "June", "July", "August", "September", "October", "November", "December");       
            for ($i = 0; $i <= ($now["year"] - 2002); $i++) {
              $year[] = 2002 + $i;
            } // end for loop
            
            // Create the Date dropdown selectors
            echo "<br /><select name=\"DateM\">";
            for($i = 0; $i < count($month); $i++) {
              echo "<option value=\"" . $month[$i] . "\">" . $month[$i] . "</option>";
            } // End for loop
            
            echo "</select>\n\t<select name=\"DateY\">";
            for($i = 0; $i < count($year); $i++) {
              echo "<option value=\"" . $year[$i] . "\">" . $year[$i] . "</option>";
            } // End for loop
            
            // End the second dropdown selector and add a submit button
            echo "</select><br />\n<input type=\"submit\" value=\"View\" />\n</div></form>";
      
          } else { // Month and year selected, reload with the appropriate information
            
            // Setup the path to the files
            $path = "files/stats/" . $_POST["DateY"] . "/";
            
            // If the file exists, read it in
            if (!file_exists($path . $_POST["DateM"] . "_name.txt")) {
              echo "<br />Unfortunately, there are currently no statistics for the month and year you selected.  Please press the back button and try a different date.";
            } else {
              $file = file($path . $_POST["DateM"] . "_name.txt");
            } // End if - else statement
            
            // Temporary:  Output the file array
            print_r($file);
            
          } // End if - else statement
        ?>
    </div>
    <br />
    
    <!-- More includes from the template -->
    <?php include("global/include/footer.html"); ?>
    
  </div>
</div>

<div id="Menu">
  
  <?php include("local/include/indexLocalNav.html"); ?>
  <!-- -->
  
</div>

</body>
</html>
