<?php
	$dir = "lib";
	$cek = mkdir($dir);
	if ($cek) {
		echo "Direktory <b>$dir</b> berhasil dibuat.";
	} else {
		echo "Direktori <b>$dir</b> gagal dibuat";
	}
	$del = rmdir($dir);
	if ($del) {
		echo "<br>Direktori <b>$dir</b> berhasil dihapus";
	} else {
		echo "<br>Direktori <b>$dir</b> gagal dihapus";
	}
?>