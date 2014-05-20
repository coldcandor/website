<?php include('includes/header.php'); ?>

<?php if ($_GET['date']) {
	var_dump($_GET);
}?>

		<section id="pizza" class="content">
			<form action="" method="GET"><fieldset>
				<input name="date" type="date" placeholder="Date"><span class="req">*</span>
				<div class="group">
					<label for="pizza1">Full Pizza?</label> <input name="pizza1" type="checkbox">
					<input name="half1" type="text" placeholder="First half of Pizza #1">
					<input name="half2" type="text" placeholder="Second half of Pizza #1">
				</div>
				<div class="group">
					<label for="pizza1">Full Pizza?</label> <input name="pizza2" type="checkbox">
					<input name="half3" type="text" placeholder="First half of Pizza #2">
					<input name="half4" type="text" placeholder="Second half of Pizza #2">
				</div>
				<div class="group">
					<label for="pizza3">Full Pizza?</label> <input name="pizza3" type="checkbox">
					<input name="half5" type="text" placeholder="First half of Pizza #3">
					<input name="half6" type="text" placeholder="Second half of Pizza #3">
				</div>
				<div class="group">
					<label for="pizza4">Full Pizza?</label> <input name="pizza4" type="checkbox">
					<input name="half7" type="text" placeholder="First half of Pizza #4">
					<input name="half8" type="text" placeholder="Second half of Pizza #4">
				</div>
				<div class="group">
					<input name="wings1" type="text" placeholder="First order of wings">
					<input name="wings2" type="text" placeholder="Second order of wings">
					<input name="wings3" type="text" placeholder="Third order of wings">
				</div>
				<input type="submit" value="Submit">
			</fieldset></form>
		</section>

		<script src="/js/pizza.js"></script>
<?php include('includes/footer.php'); ?>
