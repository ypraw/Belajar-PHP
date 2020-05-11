<?php 

	$nilai = 86;
	$grade = "=";
	$keterangan = "GAGAL";
	if ($nilai <= 100 && $nilai >=85) {
		$grade = "A";
	} elseif ($nilai >=75){
		$grade= "B";
	} elseif ($nilai >=60){
		$grade= "C";
	}elseif ($nilai >=45){
		$grade= "D";
	}elseif ($nilai >=0){
		$grade= "E";
	}else{
		$grade = "-";
	}

	echo "Nilai anda $nilai Grade, anda $keterangan";


 ?>