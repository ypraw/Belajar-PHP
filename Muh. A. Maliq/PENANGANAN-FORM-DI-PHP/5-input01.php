<!DOCTYPE html>
<html>
	<head>
		<title>Penanganan Form</title>
	</head>
	<body>
		<form action="" method="POST" name="input">
			Name : <input type="text" name="name"><br><br>
			E-Mail : <input type="text" name="email"><br><br>
			<input type="submit" name="input" value="input">
			<hr>
		</form>
	</body>
</html>
<?php
	if (isset($_POST['input'])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		echo "Nama Anda : <b>".$name."</b><br><br>";
		echo "E-Mail Anda : <b>".$email."</b>";
	}
?>