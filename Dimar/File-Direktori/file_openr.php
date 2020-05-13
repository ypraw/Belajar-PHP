<?php 

	
	$namaFile = "data.txt";
	$handle = fopen($namaFile,"r");
	if (!$handle) {
		echo "<b>File tidak dapat dibuka atau belum ada </b>";
	}else{
		echo "<b>File berhasil dibuka";
	}
	fclose($handle);



 ?>