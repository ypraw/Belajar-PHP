<?php
	if (isset($_POST['input'])) {
		$n = $_POST['nama'];
		$e = $_POST['email'];
		echo 'Nama Anda : <b>'.$n.'</b><br>';
		echo 'E-mail : <b>'.$e.'</b><br>';
	}
?>