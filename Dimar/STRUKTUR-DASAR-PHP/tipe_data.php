<?php 
	
	$nim = "14416000";
	$nama = "Dimar";
	$umur = 18;
	$nilai = 95;
	$status = TRUE;
	echo "NIM : " . $nim . "<br/>";
	echo "Nama : $nama<br/>";
	print "Umur :" . $umur;
	print "<br>";
	printf("Nilai : %.3f<br/>", $nilai);
	if($status)
		echo "Status : AKtif";
	else
		echo "Status : Tidak Aktif";


 ?>