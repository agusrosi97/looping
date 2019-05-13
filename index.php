<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>LOOPING</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<div class="container" style="width: 500px; margin: 0 auto">
		<form action="" class="" method="POST">
			<div class="form-group">
				<label>Angka 1</label>
				<input type="text" name="angka1" class="form-control">
			</div>
			<div class="form-group">
				<label>Angka 2</label>
				<input type="text" name="angka2" class="form-control">
			</div>
			<div class="form-group">
				<label>LOMPAT</label>
				<input type="text" name="pisah" class="form-control">
			</div>
			<div class="text-center">
				<button class="btn btn-outline-primary" name="hit" type="submit">PROSES</button>
				<button class="btn btn-outline-danger" type="reset">BATAL</button>
			</div>
		</form>
		<div style="margin-top: 20px;">
			<?php
				if(isset($_POST['hit'])) {
					$bil1 = $_POST['angka1'];
					$bil2 = $_POST['angka2'];
					$lipat = $_POST['pisah'];

					if ($bil1<=$bil2) {
						for ($i=$bil1; $i <= $bil2 ; $i++) {
							if($i % $lipat == 0) {
							echo "<div class='alert alert-primary' role='alert'>$i</div>";
							}
						}
					}
					elseif ($bil1>=$bil2) {
						for ($i=$bil1; $i >= $bil2 ; $i--) {
							if($i % $lipat == 0) {
							echo "<div class='alert alert-primary' role='alert'>$i</div>";
							}
						}
					}
				}
			?>
		</div>
	</div>


	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>