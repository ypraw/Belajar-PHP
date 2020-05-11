<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Curhat Colongan</title>
</head>
<body>
	<form action="" method="post" name="input">
		<h2>Masukkan Curhatan : </h2>
		<textarea name="curcol" id="" cols="100" rows="10"></textarea>
		<input type="submit" name="proses" value="proses">
	</form>
	<?php 
		if (isset($_POST['proses'])) {
			$srn = nl2br($_POST['curcol']);
			echo 'Curhat Hari Ini : <br>';
			echo '<font color=blue><b>'.$srn.'</b></font>';
		}
	?>
</body>
</html>