<?php
	$file = "data.txt";
	if (is_file($file)) {
		echo "File <b>$file</b> adalah FILE :<br>";
		if (is_executable($file)) {
			echo "File <b>$file</b> bisa dijalankan secara langsung (executable).<br>";
		} else {
			echo "File <b>$file</b> TIDAK executable.<br>";
		}
		if (is_writable($file)) {
			echo "File <b>$file</b> bisa ditulis / diedit.";
		} else {
			echo "File <b>$file</b> TIDAK bisa ditulis / diedit.";
		}
		if (is_readable($file)) {
			echo "File <b>$file</b> bisa dibaca.";
		} else {
			echo "File <b>$file</b> TIDAK bisa dibaca";
		}
		echo "Akses terakhir file <b>$file</b> = ".date("d-m-Y H:i:s", fileatime($file))."<br>";
		echo "File <b>$file</b> dibuat = ".date("d-m-Y H:i:s", filectime($file))."<br>";
		echo "Modifikasi terakhis file <b>$file</b> = ".date("d-m-Y H:i:s", filemtime($file))."<br>";
		echo "Ukuran file <b>$file</b> = ".filesize($file)." bytes<br>";
		echo "Jenis file <b>$file</b> = ".filetype($file)."<br>";
	} elseif (is_dir($file)) {
		echo "File <b>$file</b> adalah DIREKTORI<br>";
	} else {
		echo "File <b>$file</b> tidak dikenali<br>";
	}
?>