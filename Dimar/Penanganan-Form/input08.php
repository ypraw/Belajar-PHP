<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Inputan Check Box</title>
</head>
<body>
	<form action="" method="post" name="input">
		
		<h2>Pilih Anime Favorit Anda</h2>
	<input type="checkbox" name="anime1" value="Naruto" checked>Naruto <hr/>
	<input type="checkbox" name="anime2" value="Konosuba">Konosuba <hr/>
	<input type="checkbox" name="anime3" value="Violet Evergarde">Violet Evergarde <hr/>
	<input type="checkbox" name="anime4" value="Youjo Senki">Youjo Senki <hr/>
		
	<input type="submit" name="pilih" value="pilih">

	</form>

	<?php 

	if (isset($_POST['pilih'])) {
		echo "Anime favoritmu:";
		if (isset($_POST['anime01'])) {
			echo "+". $_POST['anime1'] . "<br/>";
		}
		if (isset($_POST['anime2'])) {
			echo "+". $_POST['anime2'] . "<br/>";
		}
		if (isset($_POST['anime3'])) {
			echo "+". $_POST['anime3'] . "<br/>";
		}
		if (isset($_POST['anime4'])) {
			echo "+". $_POST['anime4'] . "<br/>";
		}
	}


	 ?>

</body>
</html>