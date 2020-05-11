<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<form action="" method="POST" name="input">
			<h2>Input Kritik/Saran</h2>
			<textarea name="saran" cols="100" rows="15"></textarea><br>
			<input type="submit" name="proses" value="Input Kritik/Saran">
		</form>
		<?php
			if (isset($_POST['proses'])) {
				$saran = nl2br($_POST["saran"]);
				echo "Kritik / Saran Anda adalah :<br>";
				echo "<font color=blue>$saran</font>";
			}
		?>
	</body>
</html>