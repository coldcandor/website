    <?php include("header.inc.php"); ?>
    <div id="subHeader"> <!-- For easy determination of current page, without the nasty PHP/JS -->
      Guild Forums
    </div>
    <div id="forumContent"> <!-- Start Index Content -->
      <?php
        if ($accessLevel >= 1) {
          ?><p>Apocalypes was kind enough to lend his experence in forum moderation to the guild, and has set up a nice forum for us to use!  Clicking <a href="javascript: void(0);" onclick="window.open('http://freedomschoice.jconserv.net', 'forums');">this link</a> will open the forums in a new window or tab.  This is because there is no easy link in the forums to return here, so now none is needed.</p><?php
        } else {
          ?><p class="accessDenied">You do not have sufficient permission to access this page.  If you have gained a rank and think you may now qualify, please contact Ham via the link below.  Thank you.</p><?php
        } // End if - else statements
      ?>
    </div> <!-- End Index Content -->
    <?php include("footer.inc.php"); ?>
