<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Pengolahan form</title>
</head>
<body>
	
<form action="" name="input" method="post">
	
	Name: <input type="text" name="name"><br/> 
	E-mailL <input type="text" name="email"><br/>

	<input type="submit" name="input" value="input">

</form>

</body>
</html>


<?php 

	if (isset($_POST['input'])) {
		$nama = $_POST['name'];
		$email = $_POST['email'];
		echo "Nama Anda : <b>$nama</b> <br/>";
		echo "Email Anda : <b>$email</b>";
	}

 ?>