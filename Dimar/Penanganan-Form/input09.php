<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Makanan favorit</title>
</head>
<body>
	
	<form action="" method="post" name="input">
		<h2>Pilih Makanan Favorit Anda :</h2>
	
	<select name="jajanan">
		<option value="">---Pilih Makanan---</option>
		<option value="bakso">Bakso</option>
		<option value="ketoprak">Ketoprak</option>
		<option value="mpekmpek">mpekmpek</option>
		<option value="martabak">Martabak</option>
	</select>
	<input type="submit" name="pilih" value="pilih">
</form>


<?php 

	if (isset($_POST['pilih'])) {
		$jajanan = $_POST['jajanan'];
		echo "Makanan favorit anda adalah : <font color=blue><b>$jajanan</b></font>";
	}

 ?>


</body>
</html>