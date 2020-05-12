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
		$emailErr = $passErr = '';
		$email = $pass = '';

		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			if (empty($_POST['email'])) {
				$emailErr = 'Email tidak Boleh Kosong';
			}else{
				if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
					$emailErr = 'Email tidak Valid';
				}
			}

			if (empty($_POST['password'])) {
				$passErr = 'Password tidak Boleh Kosong';
			}else{
				$p = trim($_POST['password']);
				if (!is_numeric($p)) {
					$passErr = 'Password Harus berupa angka';
				}
			}
		}
	?>

	<form action="" name="input" method="post">
		<h2>Login</h2>
		E-mail : <input type="text" name="email">
		<span class="error">* <?php echo $emailErr ?></span><br><br>
		Password : <input type="password" name="password">
		<span class="error">* <?php echo $passErr ?></span><br><br>
		<input type="submit" value="login" name="login">
		<input type="reset" value="reset" name="reset">
	</form>

	<?php 
		if (isset($_POST['login'])) {
			if ($_POST['email'] == 'elfan@mail.com' && trim($_POST['password']) == '54321') {
				echo '<h2>Login Berhasil</h2>';
			}else{
				echo '<h2>Login Gagal</h2>';
			}
		}
	?>
</body>
</html>