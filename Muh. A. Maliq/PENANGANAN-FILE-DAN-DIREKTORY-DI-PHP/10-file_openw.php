<?php
	$namaFile = "data.txt";
	$handle = fopen($namaFile, "w");
	if (!$handle) {
		echo "<b>File tidak ditemukan atau belum ada file.!</b>";
	} else {
		echo "<b>File berhasil dibuka.";
	}
	fclose($handle);
?>