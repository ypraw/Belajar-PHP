<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<style type="text/css">
			.error {
				color: red;
			}
		</style>
	</head>
	<body>
		<?php
			$emailErr = $passwordErr = "";
			$email = $password = "";
			if ($_SERVER['REQUEST_METHOD'] == "POST") {
				if (isset($_POST["login"])) {
					if (empty($_POST["email"])) {
						$emailErr = "E-Mail is required";
					} else {
						$email = ($_POST["email"]);
						if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
							$emailErr = "Invalid E-Mail Format.!";
						}
					}
					if (empty($_POST["password"])) {
						$passwordErr = "Password is required";
					} else {
						$password = ($_POST["password"]);
						if (!is_numeric($password) == TRUE) {
							$passwordErr = "Only Number Allowed.!";
						}
					}
				}
			}
		?>
		<h2>Login Here...</h2>
		<p><span class="error">* required field.</span></p>
		<form action="" method="POST" name="input">
			E-Mail : <input type="text" name="email">
			<span class="error">* <?php echo $emailErr; ?></span>
			<br><br>
			Password : <input type="password" name="password">
			<span class="error">* <?php echo $passwordErr; ?></span>
			<br><br>
			<input type="submit" name="login" value="Input">
			<input type="submit" name="reset" value="Reset" onclick="document.theForm.reset();return false;">
			<hr>
		</form>
	</body>
</html>
<?php
	if (isset($_POST["login"])) {
		$email = $_POST["email"];
		$password = $_POST["password"];
		if ($email == "masmhaliq@gmail.com" && $password == "123") {
			echo "<h2>Login Berhasil...</h2>";
		} else {
			echo "<h2>Login Gagal...!</h2>";
		}
	} elseif (isset($_POST["reset"])) {
		$emailErr = $passwordErr = "";
		$email = $password = "";
	}
?>