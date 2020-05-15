<?php
	$f = 'data.txt';
	$f1 = 'databaru.txt';
	$f2 = 'databaru2.txt';

	if (copy($f, $f1)) {
		echo "File <b>$f</b> berhasil Dicopy menjadi <b>$f1</b> <br>";
	}

	if (rename($f1, $f2)) {
		echo "File <b>$f1</b> berhasil Direname menjadi <b>$f2</b> <br>";
	}

	if (unlink($f2)) {
		echo "File <b>$f2</b> berhasil Dihapus <br>";
	}
?>