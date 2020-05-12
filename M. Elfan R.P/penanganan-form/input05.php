<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Pengolahan Form (Text)</title>
</head>
<body>
	<form action="" method="post" name="input">
		Mantan-mantanku <br>
		<input type="text" name="nama1"> <br><br>
		<input type="text" name="nama2"> <br><br>
		<input type="text" name="nama3"> <br><br>
		<input type="text" name="nama4"> <br><br>
		<input type="submit" name="input" value="input">
	</form>
</body>
</html>

<?php
	if (isset($_POST['input'])) {
		$n1 = $_POST['nama1'];
		$n2 = $_POST['nama2'];
		$n3 = $_POST['nama3'];
		$n4 = $_POST['nama4'];

		echo "<br><b>Nama Mantan-mantanku : </b><br>";
		echo "<ol>";
		echo "<li>$n1</li>";
		echo "<li>$n2</li>";
		echo "<li>$n3</li>";
		echo "<li>$n4</li>";
		echo "</ol>";
	}
?>