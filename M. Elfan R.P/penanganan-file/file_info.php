<?php
	$f = 'data.txt';

	if (is_file($f)) {
		echo "File <b>$f</b> adalah FILE <br>";

		if (is_executable($f)) {
			echo "File <b>$f</b> Bisa dieksekusi <br>";
		}else{
			echo "File <b>$f</b> Tidak Bisa dieksekusi <br>";
		}

		if (is_writable($f)) {
			echo "File <b>$f</b> Bisa ditulis / diedit <br>";
		}else{
			echo "File <b>$f</b> Tidak Bisa ditulis / diedit <br>";
		}	

		if (is_readable($f)) {
			echo "File <b>$f</b> Bisa dibaca <br>";
		}else{
			echo "File <b>$f</b> Tidak Bisa dibaca <br>";
		}	
		
		echo "Akses terakhir File <b>$f</b> : ".date('d-m-Y H:i:s'), fileatime($f). '<br>';
		echo "File <b>$f</b> dibuat : ".date('d-m-Y H:i:s'), filectime($f). '<br>';
		echo "Modifikasi File <b>$f</b> : ".date('d-m-Y H:i:s'), filemtime($f). '<br>';
		echo "Ukuran File <b>$f</b> : ".date('d-m-Y H:i:s'), filesize($f). '<br>';
		echo "Jenis File <b>$f</b> : ".date('d-m-Y H:i:s'), filetype($f). '<br>';
	}elseif (is_dir($f)) {
		echo "File <b>$f</b> adalah Direktori";
	}else{
		echo "File <b>$f</b> Tidak Dikenal";
	}

?>