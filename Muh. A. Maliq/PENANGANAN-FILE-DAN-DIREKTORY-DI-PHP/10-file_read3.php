<?php
	$namaFile = "data.txt";
	$handle = @fopen($namaFile, "r");
	if (!$handle) {
		echo "<b>File tidak ditemukan atau belum ada file.!</b>";
	} else {
		while (!feof($handle)) {
			$buffer = fgets($handle, 4096);
			echo $buffer."<br>";
		}
	}
	fclose($handle);
?>