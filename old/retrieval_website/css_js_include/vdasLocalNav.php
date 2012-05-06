<!-- localNav.html - defines the links used for local navigation in the -->
<!-- CSS-based Inside Honeywell template                                -->

<!-- Local Navigation is defined below using the List Item (li) tags -->
<div id="localNavigation">
	<ul>
    <li><a href="<?php echo $myself . 'vdas.recall'; ?>"><strong>Recall VDAS Data</strong></a></li>
    <li class="seperator"><hr style="width: 80%;" /></li>
    <li><a href="<?php echo $myself . 'vdas.PDF'; ?>">PDF Documentation</a></li>
    <li class="seperator"><hr style="width: 80%;" /></li>
		<li><a href="<?php echo $myself . 'vdas.contacts'; ?>">Contact Us</a></li>
		<li><a href="<?php echo $myself . 'vdas.feedback'; ?>">Feedback</a></li>
		<li><a href="<?php echo $myself . 'vdas.new'; ?>">What's New</a></li>
    <li class="seperator"><hr style="width: 80%;" /></li>
    <li><a href="http://depot2.phx1.aro.allied.com/vdas/">IP Addresses</a></li>
    <li><a href="<?php echo $myself . 'vdas.inv'; ?>">Inventory of Hardware</a></li>
    <li style="display: none"><a href="<?php echo $myself . 'vdas.stats'; ?>">VDAS Statistics</a></li>
    <?php
      if ($_GET['fuseaction'] == 'vdas.inv' && $_POST['hardware'] != "" && $_SESSION['editRestrict'] == 0) {
        ?>
        <li class="seperator"><hr style="width: 80%;" /></li>
        <li><a href="<?php echo $myself . 'vdas.inv_edit'; ?>">Edit This CSV File</a></li>
        <?php
      } else if ($_GET['fuseaction'] == 'vdas.inv_edit')  {
        ?>
        <li class="seperator"><hr style="width: 80%;" /></li>
        <li><a href="<?php echo $myself . 'vdas.inv'; ?>"><strong>End Edit and Return to Inventory Selection</strong></a></li>
        <?php
      } // End if - else statement        
    ?>
    <li class="seperator"><hr style="width: 80%;" /></li>
    <li><a href="<?php echo $myself . 'login.summary'; ?>">Return to Summary</a></li>
		<li><a href="<?php echo $myself . 'login.logout'; ?>"><strong>Logout</strong></a></li>
	</ul>
</div>
