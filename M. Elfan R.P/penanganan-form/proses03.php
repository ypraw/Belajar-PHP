<?php
	if (isset($_GET['input'])) {
		$n = $_GET['nama'];
		$e = $_GET['email'];
		echo 'Nama Anda : <b>'.$n.'</b><br>';
		echo 'E-mail : <b>'.$e.'</b><br>';
	}
?>