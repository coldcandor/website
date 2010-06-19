    <?php include("../header.inc.php"); ?>
    <div id="subHeader"> <!-- For easy determination of current page, without the nasty PHP/JS -->
      Screenshot Gallery
    </div>
    <div id="screenshotsContent"> <!-- Start Index Content -->
      <?php
        if ($accessLevel >= 1) {
          
//                        // Connecting, selecting database
//                        $link = sqlite_open('/home/com/coldcandor/gallery/html/sql/linpha_db.sqlite')
//                           or die('Could not connect: ' . sqlite_error_string(sqlite_last_error($link)));
//                        //mysql_select_db('deathtoll2001') or die('Could not select database');
//                        
//                        // Send the info to the database
//                        $query = "SELECT * FROM linpha_image_comments";
//                        $result = sqlite_array_query($link, $query) or die('Query failed: ' . sqlite_error_string(sqlite_last_error($link)));
//                        
//                        print_r($result);
//            
//                        // Closing connection
//                        sqlite_close($link); 
          ?>
                        
          <h4 style="text-align: center;"><a href="javascript: void(0)" onclick="window.open('http://gallery.coldcandor.com/viewer.php?album=albums/wowscreens')">Click here to view submitted screenshots.</a></h4>
          <p>Alright, you've got a wonderous screen capture you want to share with everyone.  That's awesome, but unfortunately there's something you have to do first.  You see, for some crazy reason, WoW decides to take screenshots in HUGE .tga format.  This just won't do for a website, I'll run out of hosting space in no time.  So here's what you do:</p>
          <ol>
            <li>Click <a href="http://superb-east.dl.sourceforge.net/sourceforge/wowshots/wowshots1.0.exe">here</a> to download the program WoWshots.  Run the file and place the extracted files in you world of warcraft screenshots directory (default is c:/Program Files/World of Warcraft/Screenshots).  Any time you intend to upload a new screenshot to the website, run the .exe file that was extracted there.  It will convert all the .tga files in the directory to .jpg files, which are substantially smaller.</li>
            <li>Click the "Browse" button below and navigate to the screeny you wish to upload, or type the full directory path to the file in the text box.</li>
            <li>Click "Upload Screenshot"</li>
            <li>That's it!</li>
          </ol>
          <p><strong>NOTE: </strong>Depending on the size of the file and your internet connection, you may see nothing happen for a period of time!  Currently the upload limit is 1 MB (1,024 KB).  This will allow most uploads in .jpg format.  If you get a "file too big" message, send me a message and I'll tell you how to reduce the size, or whatever.</p>
          <?php 
            // Define a maximum size for the uploaded images in Kb
            define ("MAX_SIZE", "1024");
            
            // Set the error vaiable
            $error = 0;
            
            // This function reads the extension of the file. It is used to determine if the file is an image by checking the extension.
            function getExtension($str) {
              $i = strrpos($str, ".");
              if (!$i) { 
                return ""; 
              }
              $l = strlen($str) - $i;
              $ext = substr($str, $i+1, $l);
              return $ext;
            }
            
            // Checks if the form has been submitted
            if(isset($_POST['hide'])) {
              
              // Reads the name of the file the user submitted for uploading
              $image = $_FILES['screen']['name'];
              
              // If it is not empty
              if ($image) {
                
                // Get the original name of the file from the clients machine
                $filename = stripslashes($_FILES['screen']['name']);
                
                // Get the extension of the file in a lower case format
                $extension = getExtension($filename);
                $extension = strtolower($extension);
                
                // If it is not a known extension, we will suppose it is an error and will not upload the file,  
                // Otherwise we will do more tests
                if (($extension != "jpg") && ($extension != "jpeg") && ($extension != "png") && ($extension != "gif")) {
                  echo '<h1 style="text-align: center;">You&rsquo;ve tried to upload a file that&rsquo;s not an image!</h1>';
                } else {
              
                  // Get the size of the image in bytes
                  // $_FILES['screen']['tmp_name'] is the temporary filename of the file
                  // In which the uploaded file was stored on the server
                  $size = filesize($_FILES['screen']['tmp_name']);
               
                  // Compare the size with the maximum size we defined and print error if bigger
                  if ($size > MAX_SIZE * 1024) {
                    echo '<div style="text-align: center"><h1>You have exceeded the size limit!</h1>You&rsquo;re screenshot is ' . round($size / 1024) . ' KB and the maximum allowed is 1024 KB.</div>';
                  } else {
           
                    // We will give an unique name, for example the time in unix time format
                    $image_name = time() . '.' . $extension;
                    
                    // The new name will be containing the full path where it will be stored (moves the file to the gallery subdomain for use with LinPHA image viewer)
                    $newname = "/home/com/coldcandor/gallery/html/albums/wowscreens/" . $image_name;
                    
                    // We verify if the image has been uploaded, and print error instead
                    $moved = move_uploaded_file($_FILES['screen']['tmp_name'], $newname);
                    
                    if (!$moved) {
                      echo '<h1 style="text-align: center;">Move unsuccessfull!</h1>';
                    } else {
                      
//                      // Connecting, selecting database
//                      $link = mysql_connect('/home/com/coldcandor/gallery/html/sql/linpha_db.sqlite', 'deathtoll2001', '5#dumb')
//                         or die('Could not connect: ' . mysql_error());
//                      mysql_select_db('deathtoll2001') or die('Could not select database');
//                      
//                      // Send the info to the database
//                      $query = "SELECT * FROM linpha_image_comments";
//                      $result = mysql_query($query) or die('Query failed: ' . mysql_error());
//                      
//                      $result = mysql_fetch_assoc($result);
//                      
//                      print_r($result);
//          
//                      // Closing connection
//                      mysql_close($link);
                        
                      echo '<h1 style="text-align: center;">Upload Successful!</h1>';
                      
                    } // End if - else statements (move error)
                  } // End if - else statements (size error)
                } // End if - else statements (not an image error)
              } // End if statement (filename was not null)
            } // End if statement (form was submitted)
            ?>
            
            <!-- Next comes the form, you must set the enctype to "multipart/frm-data" and use an input type "file" -->
            <form action="" method="post" enctype="multipart/form-data"><div>
              <table class="screenTable" cellpadding="1" cellspacing="0" style="border: 1px solid #000000; text-align: center;">
                <input id="hide" name="hide" type="hidden" value="blah" />
                <tr><td><input type="file" id="screen" name="screen" class="inputTextBox" /></td></tr>
                <tr><td><input type="submit" id="upload" name="upload" value="Upload Screenshot" class="standardButton" onclick="document.getElementById('upload').disabled = true" /></td></tr>
              </table>  
            </div></form>  
            
            <?php  
          } else {
            ?><p class="accessDenied">You do not have sufficient permission to access this page.  If you have gained a rank and think you may now qualify, please contact Ham via the link below.  Thank you.</p><?php
          } // End if - else statements
        ?>
      </div> <!-- End Index Content -->
    <?php include("../footer.inc.php"); ?>