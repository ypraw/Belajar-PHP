<?php
	$namaFile = "data.txt";
	$handle = fopen($namaFile, "r");
	if (!$handle) {
		echo "<b>File tidak ditemukan atau belum ada file.!</b>";
	} else {
		echo "<b>Isi File :</b><br>";
		while ($isi = fgets($handle, 2048)) {
			echo "$isi<br>";
		}
	}
	fclose($handle);
?>