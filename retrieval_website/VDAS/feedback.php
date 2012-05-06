  <?php echo $header; ?>

  <!-- feedback.php                                                                                     -->
  <!--                                                                                                  -->
  <!-- This file provides a method of feedback for users.  It creates a simple form with an optional    -->
  <!-- user field and a large textarea to write in.  This contents of the form are emailed to David     -->
  <!-- Bluestein as well as appended to the file /tmp/VDAS_feedback.txt.  Once the form is submitted,   -->
  <!-- the page reloads as a confirmation page.                                                         -->
  <!--                                                                                                  -->
  <!-- Author:  Eric Shields                                                                            -->
   
    <!-- Heading information displayed on page -->
    <div id="sbuHeading">Data &amp; Automation</div>
    <div id="dateHeading"><script type="text/javascript">writeFormattedDate();</script></div>
    
    <p style="text-align:center"><span id="welcomeHeading">Feedback</span></p>
    <!-- -->
    
    <!-- Container for the form or conrfirmation page -->    
    <div id="feedback">
      <?php
        if ($_POST["feedback"] == null) { // Initial load - Create a form with a name box and a large textarea
          echo "    <p style=\"text-align:center\">Enter any questions, comments, or concerns you have about VDAS or this webpage in the textbox and click the \"Submit\" button.</p>\n
    \n
    <form id=\"feedbackForm\" method=\"post\" action=\"\" onsubmit=\"return document.forms[0].feedback.value == '' ? false : true;\"><div>\n
        <br />Name: <input type=\"text\" name=\"nameBox\" value=\"\" /> (Optional)
        <br /><textarea name=\"feedback\" rows=\"10\" cols=\"70\" onfocus=\"document.forms[0].feedback.value = document.forms[0].feedback.value == 'Enter Questions, Comments, or Concerns Here.' ? '' : document.forms[0].feedback.value;\">Enter Questions, Comments, or Concerns Here.</textarea><br />\n
        <input type=\"submit\" value=\"Submit\" />\n
      </div></form>\n
    <br />\n";
        } else { // Submission load - send the email, append to the file, and write a simple thank you message to the screen
          
          // Get the current date
          $date = getDate();
          
          // Format the date
          $dateFormat = $date["month"] . " " . $date["mday"] . ", " . $date["year"];
          
          // Open the feedback file
          $fp1 = fopen("VDAS/files/VDAS_feedback.txt", "a");
          
          // Send the email to David Bluestein and append the feedback to the feedback file "/tmp/VDAS_feedback.txt"
          if ($_POST["nameBox"] != "") { // If no name was entered, post as anonymous
            fwrite($fp1, "The following was entered by " . $_POST["nameBox"] . " on " . $dateFormat . ":\n\n" . $_POST["feedback"] . "\n\n\n");
            mail("david.bluestein@honeywell.com", "VDAS Feedback from " . $_POST["nameBox"], "The following was entered in the feedback form on the VDAS website by " . $_POST["nameBox"] . " on " . $dateFormat . ":\n\n" . $_POST["feedback"]);
          } else { // Otherwise, post with the name attached
            fwrite($fp1, "The following was entered by Anonymous on " . $dateFormat . ":\n\n" . $_POST["feedback"] . "\n\n\n");
            mail("david.bluestein@honeywell.com", "VDAS Feedback from Anonymous", "The following was entered in the feedback form on the VDAS website by Anonymous" . " on " . $dateFormat . ":\n\n" . $_POST["feedback"]);
          } // End if - else statement
          
          // Output the thank you message
          echo "<p style=\"text-align: center; font-size: 210%;\">Your feedback has been submitted.  Thank you!</p>";
          
          // Close the file
          fclose($fp1);
          
        } // End if - else statement
      ?>
    </div>
    