<?php 

	
	$namaFile = "data.txt";
	$handle = fopen($namaFile,"r");
	if (!$handle) {
		echo "<b>File tidak dapat dibuka atau belum ada </b>";
	}else{
		$isi = fgets($handle,2048);
		echo "Isi 1 : $isi<br/>";
	}
	fclose($handle);



 ?>