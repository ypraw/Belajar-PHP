<?php
	$namaFile = "data.txt";
	$handle = fopen($namaFile, "r");
	if (!$handle) {
		echo "<b>File tidak ditemukan atau belum ada file.!</b>";
	} else {
		$isi = fgets($handle, 2028);
		echo "Isi 1 : $isi<br>";
	}
	fclose($handle);
?>