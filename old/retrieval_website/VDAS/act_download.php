<?php 

  $frags = $_POST['results'];
    
  // Strip whitespace from the ends of the file names
  for ($i = 0; $i < count($frags); $i++) {
    $files_a[] = preg_replace("/^\s*(.+?)\s*$/", "$1", $frags[$i]);
  } // End for loop
  
  // Parse out what type of record each file is
  for ($i = 0; $i < count($frags); $i++) {
    preg_match("/\w{4}_(\w{4})\w{7}/", $frags[$i], $match);
    $types_a[] = $match[1];
  } // End for loop
  
  if (trim(end($files_a)) == "") {
    // Remove the final blank element
    unset($files_a[count($files_a) - 1]);
  } // End if statement
  
  if (trim(end($types_a)) == "") {
    // Remove the final blank element
    unset($types_a[count($types_a) - 1]);
  } // End if statement
  
  // Prep the email content
  $emailString = "";
  
  // Declare the final file arrays
  $files = array();
  $types = array();
  
  // Check for any missing files and add them to the email content
  for ($i = 0; $i < count($files_a); $i++) {
    preg_match("/^\w{4}_(\w{4})\w{7}/", $files_a[$i], $match);
    if (file_exists("/usr2/samba/VDAS/VDAS Reports/" . $match[1] . "Reports/" . $files_a[$i])) { 
      $files[] = $files_a[$i];
      $types[] = $types_a[$i];
    } else {
      $emailString .= "\nVDAS/VDAS Reports/" . $match[1] . "Reports/" . $files_a[$i];
    } // End if - else statement
  } // End for loop
  
  // Send David Bluestein an email with the incorrect filenames
  if ($emailString != "") {
    $sent = mail("david.bluestein@honeywell.com", "Nonexistant Files Shown In Index File", "The following files were selected to be downloaded from the VDAS\nwebsite, but do not exist in the appropriate directory.\n" . $emailString);
  } // End if statement
  
  // Create the temparory filenames for this session
  $filesTmp = "VDAS_files_" . rand();
  $recordsTar = "VDAS_records_" . rand() . ".zip";
  
  //    system("rm -rf /tmp/VDAS_*");
  system("mkdir /tmp/$filesTmp");
  
  // Create the file that contains the filenames
  for ($i = 0; $i < count($files); $i++) {
    system("cp \"/usr2/samba/VDAS/VDAS Reports/" . $types[$i] . "Reports/" . $files[$i] . "\" /tmp/$filesTmp");
  } // End for loop
  
  // Prep the command string
  $cmdString = "zip -jq /tmp/$recordsTar /tmp/$filesTmp/*";
  
  // Create the tar file
  system($cmdString);
  
  // Set the headers such that the browser knows this is not another webpage
  header('Content-type: application/zip'); 
  header('Content-Disposition: attachment; filename="records.zip"');
  
  // Load the file to be downloaded
  readfile("/tmp/$recordsTar");
  
  // Remove the archive once it's been downloaded
  system("rm -r /tmp/$recordsTar /tmp/$filesTmp");
  
?>