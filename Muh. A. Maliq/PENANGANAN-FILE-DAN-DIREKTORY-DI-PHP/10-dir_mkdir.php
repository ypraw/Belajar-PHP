<?php
	$dir = "img";
	$cek = mkdir($dir);
	if ($cek) {
		echo "Direktory <b>$dir</b> berhasil dibuat";
	} else {
		echo "Direktory <b>$dir</b> gagal dibuat";
	}
?>