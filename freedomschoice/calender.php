    <?php include("header.inc.php"); ?>
    <div id="subHeader"> <!-- For easy determination of current page, without the nasty PHP/JS -->
      Guild Calender
    </div>
    <div id="calenderContent"> <!-- Start Index Content -->
      <?php
        if ($accessLevel >= 1) {
          ?><p>Below is the guild event calender!  To view an event, use the controls on the calender to navigate through the months, then click on the event to view its details (opens in a new window).  To alter an event, edit the information that appears when clicking on it.  Simply click the field you wish to edit to do so.  <strong>January 25, 2007 6pm MC Run is an example showing where you can put various statements.</strong>  To view the calender in Google's standard format, <a href="javascript: void(0)" onclick="window.open('http://www.google.com/calendar/render')">click here</a>.</p>
          <p><strong>To edit an event or view the calender in full Google format, you must be signed into the calender.</strong> Click the above link and use the credentials webmaster@coldcandor.com, password FCguild to sign in.</p>
          <div style="margin: 10px auto; text-align: center;"><iframe src="http://www.google.com/calendar/embed?src=webmaster%40coldcandor.com&amp;pvttk=c9d94b33ddbd52af5fd5241ba3b114fd&amp;title=Guild%20Events&amp;height=614" style="border-width: 0;" width="640" frameborder="0" height="614"></iframe></div>
          <p>The previous method of determining group events, via the Looking For Group section of the forums, can be accessed <a href="javascript: void(0);" onclick="window.open('http://freedomschoice.jconserv.net/viewforum.php?f=5', 'forums');">here</a>.</p><?php
        } else {
          ?><p class="accessDenied">You do not have sufficient permission to access this page.  If you have gained a rank and think you may now qualify, please contact Ham via the link below.  Thank you.</p><?php
        } // End if - else statements
      ?>
    </div> <!-- End Index Content -->
    <?php include("footer.inc.php"); ?>
