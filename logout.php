<?php include("header.inc.php"); ?>
  <div>
    <?php
      session_start();
    
      // Remove session info
      $_SESSION = array();
      session_destroy();
    ?>
    
    <!-- Display logout message and redirect to home -->
    <script type="text/javascript">
      //<!--
        <?php echo "document.location = '$path/index.php?logoutmessage=true';"; ?>
      //-->
    </script>
  </div>
<?php include("header.inc.php"); ?>
