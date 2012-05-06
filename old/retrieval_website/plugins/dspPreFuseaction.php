<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
    <title>Turbo Test Instructions</title>
    
    <style type="text/css" media="all">@import "../global/css_js/ihStyle.css";</style>
    <style type="text/css" media="all">@import "../global/css_js/leftNavLayout.css";</style>
    <style type="text/css" media="all">@import "../local/css_js/bannerLogo.css";</style>
       
    <script type="text/javascript">
      var pageOwner = "CANT FIND content_owner_publsher.js FILE";
      var pagePublisher = "Make sure file path is correct!";
      var pagePublisherEmail = "First.LastName@Honeywell.com";
      var pagePublisherPhone = "No_phone_number_available";
    </script>
    
    <script type="text/javascript" src="../global/css_js/date.js"></script>
    <script type="text/javascript" src="../global/css_js/ieStyleAdd.js"></script>
  
    <script type="text/javascript" src="../content_owner_publisher.js"></script>
    <script type="text/javascript" src="../cookies.js"></script>
    
    <script type="text/javascript">
      //<!--
      var pagePublisherURL = "<a title="+pagePublisherPhone+" href=mailto:"+pagePublisherEmail+"?subject=Website-Contact>"+pagePublisher+"</a>";
      //-->
    </script>
  </head>
  
  <body>
    <?php
      if ( (isset($printable)) || (!isset($fuseaction)) ||
         ($fuseaction == 'main.login') || ($fuseaction == 'main.logout')) {
         return;
      }
    ?>
    
    <div id="Header">
    <!-- header.html - the include file that fills in the Inside Honeywell  -->
    <!-- header/banner content.  Note: do not remove any elements as doing  -->
    <!-- so will break the layout.                                          -->
    <!-- the following defines the links across the top of the page              -->
    <!-- remove the "RightJustified" part of the CSS id for left justified links -->
    <!-- Note: at least one character must be specified to maintain the layout,  -->
    <!-- use "&nbsp;" for a blank header links bar                               -->
      <div id="headerLinksRightJustified">&nbsp;
        <?php
         echo "<a href=\"" . $myself . $fuseaction . "&printable=1&NextSection=$NextSection\" class=\"headerLinks\">Printable View</a> \n";
         echo " &nbsp;|&nbsp; \n";
         echo "<a href=\"http://www.phxlab.honeywell.com/tti_data\" class=\"headerLinks\">Archive</a> \n";
         echo " &nbsp;|&nbsp; \n";
         echo "<a href=\"" . $myself . $defaultFuseaction . "main.logout\" class=\"headerLinks\">Logout</a> \n";
        ?>
      </div>
    </div>
    
    <!-- the default Inside Honeywell Logo image is defined next                 -->
    <!-- Note that the right justified logo image is defined in "bannerLogo.css" -->
    <div id="bannerImages"><a href="http://my.honeywell.com/default.htm">
      <img src="/images/ihLab/ihLogo.png" height="44" width="260" alt="" border="0" /></a>
    </div>
    
    <!-- the global navigation links displayed below the header/banner images    -->
    <!-- Note: the header looks funny when the number of links increase the      -->
    <!-- width of the page and you scroll to the right.  Make sure page width    -->
    <!-- (i.e., the number of links) does not exceed 1040x768 width to avoid this -->
    <div id="globalNavigation">
      <ul>
        <?php
          echo "     <li><a href=\"" . $myself . "main.logout\">&nbsp;Logout&nbsp;</a></li> \n";
        ?>
      </ul>
    
      <!-- the ruled line that separates the header from the bottom of the page -->
      <!-- do not remove                                                        -->
      <hr id="headrule" />
    </div>
    
    <div id="backgroundImage">
       <div id="Content">
           <div id="sbuHeading">Honeywell Aerospace</div>
           <div id="dateHeading">
              <script type="text/javascript">
                 writeFormattedDate();
              </script>
           </div>
    
  
