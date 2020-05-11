<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Pengelolaan Form</title>
</head>
<body>
	<form action="" method="post" name="input">
		Name : <input type="text" name="nama"><br><br>
		E-mail : <input type="text" name="email"><br><br>
		<input type="submit" name="input" value="input"><br><br>
	</form>
</body>
</html>

<?php
	if (isset($_POST['input'])) {
		$n = $_POST['nama'];
		$e = $_POST['email'];
		echo 'Nama Anda : <b>'.$n.'</b><br>';
		echo 'E-mail : <b>'.$e.'</b><br>';
	}
?>