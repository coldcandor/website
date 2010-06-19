<?php // Set local access variable
  ini_set("session.cache_expire","180"); // default is 180, which is 3 hours... 
  ini_set("session.gc_maxlifetime","3600"); // default is 1440, which is only 24 minutes 
  session_start();
  $accessLevel = $_SESSION['accessLevel'];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
        "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
        
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

  <?php // This code is used to provide cross-server relativity.  No renaming of links will 
        // be needed if the site is moved to a different server, domain, subdomain, etc.  
        // The final line will need to be changed if placed in a subfolder.
    // Determine the path to this page (relative to the server)
    $curr = $_SERVER["PHP_SELF"];
    
    // Find the index of the last '/' in the path
    $pos = strpos($curr, "/");
    
    // Remove the filename (and any subdirectories) of the current page from the string.  
    // This will NOT work correctly (without the next line of code being modified) if the 
    // website base is located in a subfolder!
    $path = substr($curr, 0, $pos);
    
    // Remove this line for the final version (adds subdirectory to path)
    //$path .= "/WoWbeta";
  ?>
  
  <head>
    <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
    <link rel="stylesheet" type="text/css" href="<?php echo $path ?>/fcguild.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo $path ?>/menu.css" />
    <title>Freedom's Choice Guild</title>
    
    <!-- Redirect the IE users to a instruction page for getting Firefox -->
    <!--[if IE]>
      <script type="text/javascript">document.location = "ie.html";</script>
    <![Endif]-->
    
  </head>
  
  <body>
  <div id="container">
    <div id="header">
      <div id="headerImg">
        <img src="<?php echo $path ?>/images/fc_party_resize.jpg" alt="Group Pic" />
      </div>
      <div id="title">
        <a href="<?php echo $path; ?>/index.php">
          <img src="<?php echo $path ?>/images/title.jpg" alt="Title Banner" />
        </a>
      </div>
      <div id="nav"> <!-- Start Menu -->
        <ul class="level1">
          <li class="color"><a href="<?php echo $path ?>/index.php">Home</a></li>
          <li class="submenu"><a href="javascript: void(0);" style="cursor:default">About the Guild</a>
            <ul class="level2">
              <li><a href="<?php echo $path ?>/about/history.php">History</a></li>
              <li><a href="<?php echo $path ?>/about/progress.php">Progress</a></li>
              <li><a href="<?php echo $path ?>/about/officers.php">Officers</a></li>
              <li><a href="<?php echo $path ?>/about/charter.php">Guild Charter</a></li>
            </ul>
          </li>
          <?php echo ($accessLevel >= 1) ? "<li class='submenu'><a href='javascript: void(0);' style='cursor:default'>Banks</a>
            <ul class='level2'>
              <li><a href='$path/banks/overview.php'>Overview</a></li>
              <li><a href='$path/banks/inv.php'>Inventories</a></li>
            </ul>
          </li>" : "<li class='noColor'>&nbsp;</li>"; ?>
          <li class="color"><a href="<?php echo $path ?>/patterns.php">Pattern Finder</a></li>
          <li class="submenu"><a href="javascript: void(0);" style="cursor:default">Forums</a>
            <ul class="level2">
              <li><a href="javascript: void(0)" onclick="window.open('http://forums.coldcandor.com')">New Forums</a></li>
              <li><a href="javascript: void(0)" onclick="window.open('http://freedomschoice.jconserv.net')">Old Forums</a></li>
            </ul>
          </li>
          <li class="submenu"><a href="javascript: void(0);" style="cursor:default">Misc.</a>
            <ul class="level2">
              <?php echo ($accessLevel >= 1) ? "<li><a href='$path/other/bios.php'>Bios</a></li>
                                                <li><a href='$path/other/password.php'>Change Password</a></li>" : ""; ?>
              <li><a href="<?php echo $path ?>/other/pass_recovery.php">Recover Password</a></li>
              <li><a <?php echo ($accessLevel >= 1) ? "href='" . $path . "/other/screenshots.php'" : "href=\"javascript: void(0)\" onclick=\"window.open('http://gallery.coldcandor.com/viewer.php?album=albums/wowscreens')\"" ?>>Screenshots</a></li>
              <li><a href="javascript: void(0)" onclick="window.open('http://armory.worldofwarcraft.com') ">WoW Armory</a></li>
              <li><a href="javascript: void(0)" onclick="window.open('http://www.wowwiki.com/freedoms_choice') ">WoWwiki Site</a></li>
              <li><a href="javascript: void(0)" onclick="window.open('http://www.geocities.com/coloneltrenith/Rant_Page.html')" >Tren's Rants</a></li>
              <li><a href="javascript: void(0)" onclick="window.open('http://www.geocities.com/coloneltrenith')" >Old Guild Site</a></li>
            </ul>
          </li>
          <li class="color"><a href="<?php echo $path ?>/calender.php">Calender</a></li>
          <?php echo ($accessLevel >= 1) ? "<li class='color' id='loginLink'><a href='$path/logout.php'>Logout</a></li>" :
                                            "<li class='color' id='loginLink'><a href='$path/login.php'>Login</a></li>"; ?>
        </ul>
      </div> <!-- End Menu -->
      <br />
    </div> <!-- End header -->
    
