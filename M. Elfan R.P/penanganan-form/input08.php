<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Shift Kencan</title>
	<style>
		.error{
			color: red
		}
	</style>
</head>
<body>
	<form action="" method="post" name="input">
		<h2>Pilih Shift Kencan Hari Ini</h2>
		<input type="checkbox" name="kcn[]" value="Raisa"> Raisa <br>
		<input type="checkbox" name="kcn[]" value="Gisel"> Gisel <br>
		<input type="checkbox" name="kcn[]" value="Isyana"> Isyana <br>
		<input type="checkbox" name="kcn[]" value="BCL"> BCL <br>
		<input type="submit" name="pilih" value="Pilih">
	</form>
	<?php 
		if (isset($_POST['pilih'])) {
			echo "<br> Shift Kencan Hari Ini dengan : <br>";
			if (!empty($_POST['kcn'])) {
				$kcn = $_POST['kcn'];
				echo '<ul>';
				foreach ($kcn as $v) {
					echo '<li>'.$v.'</li>';
				}
				echo '</ul>';
			}
		}
	?>
</body>
</html>