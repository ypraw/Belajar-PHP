<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>validasi</title>
		<style type="text/css">
			.error{
				color: red;
			}
		</style>
	</head>
	<body>
		<?php
		// mendefinisikan variables dengan values kosong
		$nameErr = $emailErr = "";
		$name = $email = "";
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			if (empty($_POST["name"])) {
				$nameErr = "Name is required";
			} else {
				$name = ($_POST["name"]);
				if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
				$nameErr = "Only letters and white space allowed";
				}
		}
		if (empty($_POST["email"])) {
			$emailErr = "Email is required";
		} else {
			$email = ($_POST["email"]);
			// check if e-mail address is well-formed
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$emailErr = "Invalid email format";
			}
		}
	}


	//batas

		?>
		<h2>PHP Form Dengan Validation</h2>
		<p><span class="error">* required field.</span></p>
		<form method="post" action="" name="input">
			Name: <input type="text" name="name">
			<span class="error">* <?php echo $nameErr; ?></span>
			<br><br>
			E-mail: <input type="text" name="email">
			<span class="error">* <?php echo $emailErr; ?></span>
			<br><br>
			<input type="submit" name="input" value="input">
		</form>
	</body>
</html>

<?php 

	
	if (isset($_POST['input'])) {
	if (empty($_POST['name'])) {
			$name = "Silahkan masukan nama anda :'";
		}	else{
			$name = ($_POST["name"]);
			if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
				$name = "Only letters and white space allowed";
			}
		}
	}


	if (empty($_POST["email"])) {
		$email = "Silahkan masukan email :'";
	}else{
		$email = ($_POST["email"]);
		if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
			$email = "Invalid email format";
		}
	}

	echo "Nama Anda : <b>$name</b> <br/>";
	echo "Nama Anda : <b>$email</b>";



 ?>