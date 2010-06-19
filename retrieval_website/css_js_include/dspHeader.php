<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
        "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
    <title>Test Archive File Retrieval</title>

    <!-- Include css_jsIncludes.html from template -->
    <?php include 'ets/include/ihLabCSS-JSincludes.html'; ?>
    <!-- End css_jsIncludes.html -->
    
    <!-- Include style sheets according to the page being loaded -->
    <?php 
      if (strstr($_GET['fuseaction'], "login.")) {
        ?><style type="text/css" media="all">@import url('css_js_include/login.css');</style> 
          <script type="text/javascript" src="css_js_include/login.js"></script><?php
      } else if (strstr($_GET['fuseaction'], "vdas.")) {
        ?>
        <style type="text/css" media="all">@import url('css_js_include/VDAS.css');</style>
        <script type="text/javascript" src="css_js_include/VDAS.js"></script>
        <?php
        // Check if the user is using Linux.  NOTE:  This uses header information and IS NOT garunteed to be correct, based on whether the user's browser correctly reports what it is!
        preg_match("/[Mm]ozilla\/(\d\.\d+) \s                     # 4.0 = IE, 5.0 = Firefox
                     \((compatible|[Ww]indows|X11); \s            # compatible = IE on Windows, Windows = Firefox on Windows, X11 = linux
                     (U|MSIE\s\d\.\d+); \s                        # U = Firefox, MSIE x.x = IE v x.x
                     ([Ww]indows\s.+?\s\d\.\d+|[Ll]inux\si\d+);   # Windows = Windows, Linux = linux
                     .*/x", $_SERVER["HTTP_USER_AGENT"], $match);
        if (stristr($match[4], "linux")) {
          echo "<style type=\"text/css\" media=\"all\">@import url('css_js_include/VDAS-linux.css');</style>";
        } else {
        ?>
        <!-- The following is an interesting non-hack I found:  This line will ONLY be read by IE browsers! -->
        <!-- It will load an IE-only style sheet that will overwrite various styles in VDAS.css.            -->
        <!--[if IE]>
          <style type="text/css" media="all">@import url('css_js_include/VDAS-IE.css');</style>
        <![endif]-->
        <?php
        } // End if - else statement
      } else if (strstr($_GET['fuseaction'], "dats.")) {
        ?>
        <style type="text/css" media="all">@import url('css_js_include/DATS.css');</style>
        <script type="text/javascript" src="css_js_include/DATS.js"></script>
        <?php
        // Check if the user is using Linux.  NOTE:  This uses header information and IS NOT garunteed to be correct, based on whether the user's browser correctly reports what it is!
        preg_match("/[Mm]ozilla\/(\d\.\d+) \s                     # 4.0 = IE, 5.0 = Firefox
                     \((compatible|[Ww]indows|X11); \s            # compatible = IE on Windows, Windows = Firefox on Windows, X11 = linux
                     (U|MSIE\s\d\.\d+); \s                        # U = Firefox, MSIE x.x = IE v x.x
                     ([Ww]indows\s.+?\s\d\.\d+|[Ll]inux\si\d+);   # Windows = Windows, Linux = linux
                     .*/x", $_SERVER["HTTP_USER_AGENT"], $match);
        if (stristr($match[4], "linux")) {
          echo "<style type=\"text/css\" media=\"all\">@import url('css_js_include/DATS-linux.css');</style>";
        } else {
        ?>
        <!-- The following is an interesting non-hack I found:  This line will ONLY be read by IE browsers! -->
        <!-- It will load an IE-only style sheet that will overwrite various styles in VDAS.css.            -->
        <!--[if IE]>
          <style type="text/css" media="all">@import url('css_js_include/DATS-IE.css');</style>
        <![endif]-->
        <?php
        } // End if - else statement
      } // End if - else if statement
    ?>
    
    <style type="text/css" media="all">@import url('css_js_include/bannerLogo.css');</style>
  
    <?php
      if (strstr($_GET['fuseaction'], 'vdas.')) {
        ?><script type="text/javascript" src="css_js_include/vdas_content_owner_publisher.js"></script><?php
      } else {
        ?><script type="text/javascript" src="css_js_include/dats_content_owner_publisher.js"></script><?php
      } // End if - else statement
    ?>
      
    <script type="text/javascript">
      //<!-- Prevent validator and old browser errors
      var pageOwnerURL = "<a title="+pageOwnerPhone+" href=mailto:"+pageOwnerEmail+"?subject=Website-Contact>"+pageOwner+"</a>";
      var pagePublisherURL = "<a title="+pagePublisherPhone+" href=mailto:"+pagePublisherEmail+"?subject=Website-Contact>"+pagePublisher+"</a>";
      //-->
    </script>
    
  </head>
  <body 
    <?php 
      if (strstr($_GET['fuseaction'], "login.login") || strstr($_GET['fuseaction'], "login.logout")) {
        echo "onload=\"if(document.getElementById('eid').value == ''){document.getElementById('eid').focus();} else{document.getElementById('password').focus();}\""; 
      } // End if statement
    ?>
  >

    <!-- Include template header -->
    <?php include 'ets/include/header.html'; ?>
    <!-- End header include -->
  
    <div id="backgroundImage">  
      <div id="Content">
    
      <!-- End dspHeader.php -->