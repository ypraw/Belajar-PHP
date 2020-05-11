<?php
	$nim = "2105950000";
	$nama = "Muhamad A. Maliq";
	$umur = 25;
	$nilai = 75.5;
	$status = TRUE;
	// Cetak Hasil
	echo "NIM : ".$nim."<br>";
	echo "Nama : ".$nama."<br>";
	print "Umur : ".$umur;
	print "<br>";
	printf("Nilai : %.3f<br>", $nilai);
	if ($status) {
		echo "Status : Aktif";
	} else {
		echo "Status : Tidak Aktif";
	}
?>