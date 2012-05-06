    <?php include("../header.inc.php"); ?>
    <div id="subHeader"> <!-- For easy determination of current page, without the nasty PHP/JS -->
      Guild Bank Inventories
    </div>
    <div id="bankInvContent"> <!-- Start Content -->
      <script type="text/javascript">
        //<!--  This code and the bank HTML files were created from GuildToolS addon package
        ns4 = document.layers
        ie4 = document.all
        nn6 = document.getElementById && !document.all
        function hideObject(id) {
           if (ns4) {
              document.id.visibility = "hide";
           }   else if (ie4) {
              document.all[id].style.visibility = "hidden";
           }   else if (nn6) {
              document.getElementById(id).style.visibility = "hidden";
         }
        }
        function showObject(id) {
           if (ns4) {
              document.id.visibility = "show";
           }   else if (ie4) {
              document.all[id].style.visibility = "visible";
           }   else if (nn6) {
              document.getElementById(id).style.visibility = "visible";
           }
        }
        //-->
      </script>
      <?php
        if ($accessLevel >= 1) {
          ?><p>Below you will find the bank inventories that have been uploaded.  Mouseover an item to view it's description.  Values given are vendor values, although the addon author intends to implement Auctioneer price grabbing eventually.  Clicking on an item will look that item up on Thottbot.com.</p>
          <p>I appologize if the bank inventories look strange.  I've narrowed down where the problem is coming from, but it makes absolutely no sense and thus I haven't been able to correct it yet.  The inventories are still fully functional</p><?php
          if (strtolower($_SESSION['username']) == 'ham') {
            include("hambank.html");
          }
          include("equipbank.html");
          include("cookbank.html");
          include("repbank.html");
          include("herbbank.html");
        } else {
          ?><p class="accessDenied">You do not have sufficient permission to access this page.  If you have gained a rank and think you may now qualify, please contact Ham via the link below.  Thank you.</p><?php
        } // End if - else statements
      ?>
    </div> <!-- End Content -->
    <?php include("../footer.inc.php"); ?>
