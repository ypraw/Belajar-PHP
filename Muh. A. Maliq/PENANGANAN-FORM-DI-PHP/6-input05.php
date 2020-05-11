<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<form action="" method="POST" name="input">
			<b>Nama Sahabat - Sahabat Dekatku</b>
			<hr>
			<input type="text" name="nama1"/></p>
			<input type="text" name="nama2"/></p>
			<input type="text" name="nama3"/></p>
			<input type="text" name="nama4"/></p>
			<input type="submit" name="input" value="Input">
		</form>
		<hr>
		<?php
			if (isset($_POST["input"])) {
				$nama1 = $_POST["nama1"];
				$nama2 = $_POST["nama2"];
				$nama3 = $_POST["nama3"];
				$nama4 = $_POST["nama4"];
				echo "<b>Nama Sahabat - Sahabat Dekatku</b><hr style='border-top: 1px dotted'>";
				echo "$nama1<br>";
				echo "$nama2<br>";
				echo "$nama3<br>";
				echo "$nama4<br>";
			}
		?>
	</body>
</html>