<?php
	session_start();
	if (isset($_POST['login'])) {
		$u = $_POST['user'];
		$p = $_POST['pass'];

		if ($u == 'elfan' && $p == 321) {
			$_SESSION['login'] = $u;

			echo "<h1>Anda Berhasil Login</h1>";
			echo "<h2>Klik <a href='session02.php'>Disini</a></h2> untuk menuju ke halaman session";
		}
	}else{
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
</head>
<body>
	<form action="" method="post">
		<h2>Login</h2>
		Username : <input type="text" name="user"> <br>	
		Password : <input type="password" name="pass"> <br>
		<input type="submit" name="login" value="Login">	
	</form>
</body>
</html>
<?php } ?>