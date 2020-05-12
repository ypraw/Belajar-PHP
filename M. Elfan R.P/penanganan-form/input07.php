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
	<?php
		$gbt = ''; 
		$gbtErr = '';

		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			if (empty($_POST['gbt'])) {
				$emailErr = 'Pilih Gebetan !';
			}else{
				$gbt = $_POST['gbt'];
			}
		}
	?>
	<form action="" method="post" name="input">
		<h2>Pilih Gebetan</h2>
		<input type="radio" name="gbt" <?php if($gbt == 'Raisa'){echo "checked";} ?> value="Raisa"> Raisa
		<input type="radio" name="gbt" <?php if($gbt == 'Gisel'){echo "checked";} ?> value="Gisel"> Gisel
		<input type="radio" name="gbt" <?php if($gbt == 'Isyana'){echo "checked";} ?> value="Isyana"> Isyana
		<input type="radio" name="gbt" <?php if($gbt == 'BCL'){echo "checked";} ?> value="BCL"> BCL
		<span class="error"><?php echo $gbtErr ?></span>
		<input type="submit" name="pilih" value="Pilih">
	</form>
	<?php 
		if (isset($_POST['pilih'])) {
			if (empty($_POST['gbt'])) {
				$gbtErr = 'Pilih Gebetan';
				echo '<h2>'.$gbtErr.'</h2>';
			}else{
				$gbt = $_POST['gbt'];
				echo 'Gebetanmu adalah : <b>'.$gbt.'</b>';
			}
		}
	?>
</body>
</html>