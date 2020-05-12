<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<style>
		.error{
			color: red;
		}
	</style>	
</head>
<body>
	<?php
		$emailErr = $nameErr = '';
		$email = $name = '';

		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			if (empty($_POST['email'])) {
				$emailErr = 'Email tidak Boleh Kosong';
			}else{
				if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
					$emailErr = 'Email tidak Valid';
				}
			}

			if (empty($_POST['nama'])) {
				$nameErr = 'Nama tidak Boleh Kosong';
			}else{
				$p = trim($_POST['nama']);
				if (!preg_match("/^[a-zA-Z ]*$/",$p)) {
					$nameErr = 'Hanya Huruf dan Spasi';
				}
			}
		}
	?>

	<form action="" name="input" method="post">
		<h2>PHP Form Validation</h2>
		Nama : <input type="text" name="nama">
		<span class="error">* <?php echo $nameErr ?></span><br><br>
		E-mail : <input type="text" name="email">
		<span class="error">* <?php echo $emailErr ?></span><br><br>
		<input type="submit" value="input" name="input">
	</form>

	<?php 
		if (isset($_POST['input'])) {
			if (empty($_POST['email'])) {
				$emailErr = 'Email tidak Boleh Kosong';
			}else{
				$emailErr = $_POST['email'];
				if (!filter_var($emailErr, FILTER_VALIDATE_EMAIL)) {
					$emailErr = 'Email tidak Valid';
				}
			}

			if (empty($_POST['nama'])) {
				$nameErr = 'Nama tidak Boleh Kosong';
			}else{
				$nameErr = trim($_POST['nama']);
				if (!preg_match("/^[a-zA-Z ]*$/",$nameErr)) {
					$nameErr = 'Hanya Huruf dan Spasi';
				}
			}

			echo 'Nama Anda : <b>'.$nameErr.'</b><br><br>';
			echo 'E-mail Anda : <b>'.$emailErr.'</b><br><br>';
		}
	?>
</body>
</html>