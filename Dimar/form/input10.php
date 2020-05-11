<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Kritik dan Saran - Inputan Textarea</title>
</head>
<body>
	
	
	<form action="" method="post" name="input">
		
	<h2>Input Kritik/saran</h2>
	<textarea name="saran" cols="100" rows="15"></textarea>
	
	<input type="submit" name="proses" value="Input Saran">

	</form>


	<?php 

	if (isset($_POST['proses'])) {
		$saran = nl2br($_POST['saran']);
		echo "Kritik / Saran Anda adalah : <br/>";
		echo "<font color=blue<b>$saran</b></font><br/>";
	}


	 ?>

</body>
</html>