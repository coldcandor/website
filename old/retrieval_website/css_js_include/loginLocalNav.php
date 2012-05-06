<!-- localNav.html - defines the links used for local navigation in the -->
<!-- CSS-based Inside Honeywell template                                -->

<!-- Local Navigation is defined below using the List Item (li) tags -->
<div id="localNavigation">
	<ul>
    <?php
      if ($_GET['fuseaction'] == 'login.summary') {
        ?>
        <li class="sumHead">VDAS Website</li>
        <li><a href="<?php echo $myself . 'vdas.recall'; ?>"><strong>Recall VDAS Data</strong></a></li>
        <li><a href="<?php echo $myself . 'vdas.PDF'; ?>">PDF Documentation</a></li>
        <li><a href="<?php echo $myself . 'vdas.contacts'; ?>">Contact Us</a></li>
        <li><a href="<?php echo $myself . 'vdas.feedback'; ?>">Feedback</a></li>
        <li><a href="<?php echo $myself . 'vdas.new'; ?>">What's New</a></li>
        <li><a href="http://depot2.phx1.aro.allied.com/vdas/">IP Addresses</a></li>
        <li><a href="<?php echo $myself . 'vdas.inv'; ?>">Inventory of Hardware</a></li>
        <li style="display: none"><a href="<?php echo $myself . 'vdas.stats'; ?>">VDAS Statistics</a></li>
        <li>&nbsp;</li>
        <li class="sumHead">DATS Website</li>
        <li><a href="<?php echo $myself . 'dats.recall'; ?>"><strong>Recall DATS Data</strong></a></li>
        <li>&nbsp;</li>
        <li class="sumHead">Logout</li>
        <li><a href="<?php echo $myself . 'login.logout'; ?>"><strong>Logout</strong></a></li>
        <?php
      } // End if statement        
    ?>
	</ul>
</div>
