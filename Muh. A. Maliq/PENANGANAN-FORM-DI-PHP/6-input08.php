<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<form action="" method="POST" name="input">
			<h2>Pilih Pembalap Favorit Anda</h2>
			<input type="checkbox" name="pembalap01" value="Valentino Rossi">Valentino Rossi<br><br>
			<input type="checkbox" name="pembalap02" value="Marc Marquez">Marc Marquez<br><br>
			<input type="checkbox" name="pembalap03" value="Jorge Lorenzo">Jorge Lorenzo<br><br>
			<input type="checkbox" name="pembalap04" value="Dovisioso">Dovisioso<br><br>
			<input type="submit" name="pilih" value="Pilih Pembalap">
			<hr>
		</form>
		<?php
			if (isset($_POST["pilih"])) {
				echo "<b>Pembalap Favorit Anda adalah :<br>";
				if (isset($_POST["pembalap01"])) {
					echo "+ ".$_POST["pembalap01"]."<br>";
				}
				if (isset($_POST["pembalap02"])) {
					echo "+ ".$_POST["pembalap02"]."<br>";
				}
				if (isset($_POST["pembalap03"])) {
					echo "+ ".$_POST["pembalap03"]."<br>";
				}
				if (isset($_POST["pembalap04"])) {
					echo "+ ".$_POST["pembalap04"]."<br>";
				}
			}
		?>
	</body>
</html>