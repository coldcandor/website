<?php echo $header; ?>
  
  <!-- contacts.php                                                                                -->
  <!--                                                                                             -->
  <!-- This file reads in the plain text file "files/VDAS_contacts.txt" and parses it into an HTML -->
  <!-- table.  The rules for editing the file are in the file itself.                              -->
  <!--                                                                                             -->
  <!-- Author:  Eric Shields                                                                       -->
       
    <!-- Header information displayed on page -->
    <div id="sbuHeading">Data &amp; Automation</div>
    <div id="dateHeading"><script type="text/javascript">writeFormattedDate();</script></div>
    
    <p style="text-align:center"><span id="welcomeHeading">Contact List of VDAS and VAX experts</span></p>
    
    <p style="text-align:center; padding: 0px 35px;">Here's a list of the important people involved with VDAS, people who know about vibration, about the VAX, about VDAS, or about computers related to VDAS.</p>
    <!-- -->
    
    <p style="text-align:center; padding: 0px 35px;">If you have problems that you cannot resolve on the VAX, the following people can help.  These are listed in the order that they should be called, starting with the most experienced person, John, who has had extensive VDAS/VAX interactions.</p>

    <!-- Container for all the contacts -->
    <div id="contacts">
      <?php
      
      /* This PHP block reads in the contacts file, parses out the information,
       * and creates a series of HTML tables from it.
       */
      
      // Read in the contacts file
      $contactFile = file("VDAS/files/VDAS_contacts.txt");
      
     // Parse the information into the webpage
     while (list($k, $v) = each($contactFile)) {
       
       // Replace common HTML entities
       $v = str_replace('&', '&amp;', $v);
       $v = str_replace('<', '&lt;', $v);
       $v = str_replace('>', '&gt;', $v);
       
       // Clear whitespace
       $v = trim($v);
       
       // Ignore comments
       if (preg_match("/^\/\//", $v)) {
         continue;
       } // End if statement
       
       // If the current line is a title, output a subTitle
       if (preg_match("/^---/", $v)) {
         
         // Trim the dashes from the title
         $contactFile[key($contactFile) - 1] = preg_replace("/^\s*---\s(.*)\s---\s*$/", "$1", $contactFile[key($contactFile) - 1]);
         
         // If this is not the example, echo "</table>", then create the subTitle div and start the next table in either case
         if (strstr($contactFile[key($contactFile) - 1], "VDAS Author")) {
           echo "<div class=\"tableSubTitle\">" . $contactFile[key($contactFile) - 1] . "</div>\n";
           echo "<table class=\"vdasTable\">\n";
         } else {
           echo "</table>\n";
           echo "<div class=\"tableSubTitle\">" . $contactFile[key($contactFile) - 1] . "</div>\n";
           echo "<table class=\"vdasTable\">\n";
         } // End if - else statement
         
       } else if (!empty($v)) { // Check if it's a blank line
         
         // Parse the first line into name, title, and phone
         if(preg_match("/^\s* (.+?) (\((.*)\))? \s+-\s+ (\d{3}\.\d{3}\.\d{4} \s* (ext\.?\s*\d+)?) \s*$/x", $v, $match)) {
         
           /* Contents of the $match array:
            *   [0] => Entire line
            *   [1] => Name
            *   [2] => Empty or (Title) (Parenthesis included)
            *   [3] => Empty or Title   (Parenthesis not included)
            *   [4] => Phone Number with extension if present (With dot delimiters)
            *   [5] => Phone extension
            */
            
           // Create the row and Name cell
           echo "  <tr class=\"newContact\">\n";
           echo "    <td class=\"newContact\">$match[1]</td>\n";
           
           // If it exists, create the Title cell, otherwise create a blank one
           if ($match[2] != "") {
             echo "    <td class=\"newContact\">$match[3]</td>\n";
           } else {
             echo "    <td class=\"newContact\">&nbsp;</td>\n";
           } // End if - else statement
           
           // Create the Phone # cell
           echo "    <td class=\"newContact\">$match[4]</td>\n";
           echo "  </tr>\n";
           
           // Wipe the text variable
           $paraText = "";
           
           // Grab the text for the first paragraph (This starts with the first
           // line AFTER the name-phone # line since "each" has already 
           // incremented the array cursor)
           while (trim(current($contactFile)) != "") {
             
             // Replace common HTML entities
             $contactFile[key($contactFile)] = str_replace('&', '&amp;', current($contactFile));
             $contactFile[key($contactFile)] = str_replace('<', '&lt;', current($contactFile));
             $contactFile[key($contactFile)] = str_replace('>', '&gt;', current($contactFile));
       
             // Add the text
             $paraText .= trim(current($contactFile)) . "<br />";
             next($contactFile);
             
           } // End while loop
           
           // Output the first paragraph into the table
           if (!empty($paraText)) {
             echo "  <tr>\n";
             echo "    <td class=\"sameContact\" colspan=\"3\">$paraText</td>\n";
             echo "  </tr>\n";
           } // End if statement
           
         // Parse the paragraphs of additional information
         } else if (!empty($v)) {
           
           // Start writing the paragraph text
           $paraText = $v;
           
           // Get the text for the paragraph entry
           while (trim(current($contactFile)) != "") {
             
             // Replace common HTML entities
             $contactFile[key($contactFile)] = str_replace('&', '&amp;', current($contactFile));
             $contactFile[key($contactFile)] = str_replace('<', '&lt;', current($contactFile));
             $contactFile[key($contactFile)] = str_replace('>', '&gt;', current($contactFile));
       
             // Add the text
             $paraText .= trim(current($contactFile)) . "<br />";
             next($contactFile);
             
           } // End while loop
           
           // Output the paragraph into the table
           echo "  <tr>\n";
           echo "    <td class=\"sameContact\" colspan=\"3\">$paraText</td>\n";
           echo "  </tr>\n";
           
         } // End if - else if statement
         
       } // End if - else if statement
       
     } // End while loop
      
     // End the final table
     echo "</table>\n";
     ?>
    </div>
    <br />
    
