<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Pengolahan Form - Text</title>
</head>
<body>
	
	<form action="" method="post" name="input">
		Sahabat-sahabat Dekatku <br/>
		<input type="text" name="nama1"/> <br/><br/>
		<input type="text" name="nama2"/>
		<br/>
		<br/>
		<input type="text" name="nama3"/>
		<br/>
		<br/>
		<input type="text" name="nama4"/>
		<br/>
		<br/>
		<input type="submit" name="input" value="input">
	</form>

	<?php 

	if (isset($_POST['input'])) {
		$nama1 = $_POST['nama1'];
		$nama2 = $_POST['nama2'];
		$nama3 = $_POST['nama3'];
		$nama4 = $_POST['nama4'];
	}

	echo "<b>Nama Sahabat-sahabat Dekatku : </b><br/>";
	echo "$nama1 <br/>";
	echo "$nama2 <br/>";
	echo "$nama3 <br/>";
	echo "$nama4 <br/>";



	 ?>

</body>
</html>