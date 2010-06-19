    <?php include("header.inc.php"); ?>
    <div id="subHeader"> <!-- For easy determination of current page, without the nasty PHP/JS -->
      Site Map
    </div>
    <div id="mapContent"> <!-- Start Index Content -->
        <ul class="level1">
          <li class="color"><a href="<?php echo $path ?>/index.php">Home</a></li>
          <li class="submenu">About the Guild
            <ul class="level2">
              <li><a href="<?php echo $path ?>/about/history.php">History</a></li>
              <li><a href="<?php echo $path ?>/about/progress.php">Progress</a></li>
              <li><a href="<?php echo $path ?>/about/officers.php">Officers</a></li>
              <li><a href="<?php echo $path ?>/about/charter.php">Guild Charter</a></li>
            </ul>
          </li>
          <li class="color"><a href="<?php echo $path ?>/patterns.php">Pattern Finder</a></li>
          <li class="submenu">Forums
            <ul class="level2">
              <li><a href="javascript: void(0)" onclick="window.open('http://forums.coldcandor.com')">New Forums</a></li>
              <li><a href="javascript: void(0)" onclick="window.open('http://freedomschoice.jconserv.net')">Old Forums</a></li>
            </ul>
          </li>
          <li class="submenu">Misc.
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
    </div> <!-- End Index Content -->
    <?php include("footer.inc.php"); ?>
