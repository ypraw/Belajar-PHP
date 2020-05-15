<?php
	session_start();
	if (isset($_POST["login"])) {
		$user = $_POST["user"];
		$pass = $_POST["pass"];
		if ($user == "masmhaliq" && $pass = "karepem") {
			$_SESSION["login"] = $user;
			echo "<h1>Anda berhasil LOGIN</h1>";
			echo "<h2>Klick <a href='12-session02.php'> disini (12-session02.php)</a> untuk menuju ke halaman pemeriksaan.";
		}
	} else {
?>
<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<form action="" method="post">
			<h2>Login Dulu OM</h2>
			Username : <input type="text" name="user"><br><br>
			Password : <input type="password" name="pass">
			<hr>
			<input type="submit" name="login" value="Log In">
		</form>
	</body>
</html>
<?php
	}
	
?>