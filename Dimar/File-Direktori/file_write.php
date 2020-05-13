<?php 

	
	$namaFile = "data.txt";
	$handle = fopen($namaFile,"w");
	if (!$handle) {
		echo "<b>File tidak dapat dibuka atau belum ada </b>";
	}else{
		fwrite($handle, "Fakultas SMK Telkom\n");
		fputs($handle,"Universitas Anime Selatan");
		//file_put_contents ($namafile,"Jakarta");
		echo "<b>File berhasil ditulis";
	}
	fclose($handle);



 ?>