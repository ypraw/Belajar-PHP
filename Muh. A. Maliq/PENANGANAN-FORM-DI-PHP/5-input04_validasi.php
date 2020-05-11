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
			$nameErr = $emailErr = "";
			$name = $email = "";
			if ($_SERVER['REQUEST_METHOD'] == "POST") {
				if (empty($_POST["name"])) {
					$nameErr = "Name is required";
				} else {
					$name = ($_POST["name"]);
					if (!preg_match("/^[a-z A-Z\s\.\']*$/", $name)) {
						$nameErr = "Only letters and white space allowed";
					}
				}
				if (empty($_POST["email"])) {
					$emailErr = "E-Mail is required";
				} else {
					$email = ($_POST["email"]);
					if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
						$emailErr = "Invalid E-Mail format";
					}
				}
			}
		?>
		<h2>PHP Form dengan Validation</h2>
		<p><span class="error">* required field.</span></p>
		<form action="" method="POST" name="input">
			Name : <input type="text" name="name">
			<span class="error">* <?php echo $nameErr; ?></span>
			<br><br>
			E-Mail : <input type="text" name="email">
			<span class="error">* <?php echo $emailErr; ?></span>
			<br><br>
			<input type="submit" name="input" value="Input">
			<hr>
		</form>
	</body>
</html>
<?php
	if (isset($_POST["input"])) {
		if (empty($_POST["name"])) {
			$name = "Silahkan Masukkan Nama Anda !!";
		} else {
			$name = ($_POST["name"]);
			if (!preg_match("/^[a-z A-Z\s\.\']*$/", $name)) {
				$name = "Only letters and white space allowed";
			}
		}
		if (empty($_POST["email"])) {
			$email = "Silahkan Masukkan E-Mail Anda !!";
		} else {
			$email = ($_POST["email"]);
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				$email = "Invalid E-Mail format";
			}
		}
		echo "Nama Anda : <b>".$name."</b><br><br>";
		echo "E-Mail Anda : <b>".$email."</b>";
	}
?>