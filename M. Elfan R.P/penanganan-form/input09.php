<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Pilih Gebetan</title>
	<style>
		.error{
			color: red
		}
	</style>
</head>
<body>
	<form action="" method="post" name="input">
		<h2>Pilih Gebetanmu : </h2>
		<select name="gbt" id="">
			<option value=""> --Pilih Gebetan-- </option>
			<option value="Raisa"> Raisa</option>
			<option value="Gisel"> Gisel</option>
			<option value="Isyana"> Isyana</option>
			<option value="BCL"> BCL</option>
		</select>
		<input type="submit" name="pilih" value="Pilih">
	</form>
	<?php 
		if (isset($_POST['pilih'])) {
			$gbt = $_POST['gbt'];
			echo 'Gebetanmu adalah : <b>'.$gbt.'</b>';
		}
	?>
</body>
</html>