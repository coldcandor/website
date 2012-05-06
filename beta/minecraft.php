<?php include('includes/header.php'); ?>
<script type="text/javascript" src="js/minecraft.js"></script>

		<section id="minecraft" class="content">
			<p class="instructions">Fill out the form below and click "Enchant!" to see a potential outcome of enchanting that item.  Feel free to reclick as many times as you want!</p>
			<div class="inputs">
				<label class="level">Level</label>
				<input class="level" type="text" value="" />
				<label class="type">Item Classification</label>
				<select class="type">
					<option>Armor</option>
					<option>Sword</option>
					<option>Tool</option>
					<option>Bow</option>
				</select>
				<label class="material">Item Material</label>
				<select class="material">
					<option>Wood</option>
					<option>Leather</option>
					<option>Stone</option>
					<option>Iron</option>
					<option>Chain</option>
					<option>Gold</option>
					<option>Diamond</option>
				</select>
<!--				<a class="calculate" href="#">Calculate!</a> -->
				<a class="enchant" href="#">Enchant!</a>
			</div>
			<div class="outputs"></div>
		</section>

<script type="text/javascript">CC.Minecraft.init()</script>
<?php include('includes/footer.php'); ?>
