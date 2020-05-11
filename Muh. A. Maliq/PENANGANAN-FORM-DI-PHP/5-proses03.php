<?php
	if (isset($_GET['input'])) {
		$name = $_GET['name'];
		$email = $_GET['email'];
		echo "Nama Anda : <b>".$name."</b><br><br>";
		echo "E-Mail Anda : <b>".$email."</b>";
	}
?>