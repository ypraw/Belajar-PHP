<?php
	if (isset($_POST['input'])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		echo "Nama Anda : <b>".$name."</b><br><br>";
		echo "E-Mail Anda : <b>".$email."</b>";
	}
?>