<?php
	$namaFile = "data.txt";
	$handle = fopen($namaFile, "w");
	if (!$handle) {
		echo "<b>File tidak ditemukan atau belum ada file.!</b>";
	} else {
		fwrite($handle, "Ujicoba Write File.\n");
		fputs($handle, "Belajar PHP dari NULL");
		echo "<b>File berhasil dibuka.";
	}
	fclose($handle);
?>