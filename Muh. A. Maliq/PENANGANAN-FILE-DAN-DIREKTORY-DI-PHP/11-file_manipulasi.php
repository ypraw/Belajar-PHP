<?php
	$file = "data.txt";
	$fileBaru = "databaru.txt";
	$fileBaru2 = "databaru2.txt";
	if (copy($file, $fileBaru)) {
		echo "File <b>$file</b> berhasil disalin menjadi <b>$fileBaru</b>.<br>";
	}
	if (rename($fileBaru, $fileBaru2)) {
		echo "File <b>$fileBaru</b> berhasil diubah menjadi <b>$fileBaru2</b>.<br>";
	}
	if (unlink($fileBaru2)) {
		echo "File <b>$fileBaru2</b> berhasil dihapus.<br>";
	}
?>