<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<form action="" method="post">
		NIM : <input type="text" name="nim">

		<input type="submit" name="submit" value="Submit">
	</form>
</body>
</html>

<?php 
	if (isset($_POST['submit'])) {
		$nim  = substr($_POST['nim'],2,2);
		switch ($nim) {
			case '11':
				$j = "TI";
				break;
			case '12':
				$j = "SI";
				break;
			default:
				$j = "SALAH JURUSAN";
				break;
		}


		echo 'NIM Anda  : '.$_POST['nim'];
		echo '<br>JURUSAN Anda  : '.$j;
	}
 ?>