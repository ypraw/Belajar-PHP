<?php
	$nilai	= 86;
	$grade	= "~";
	$ket 	= "GAGAL";

	if ($nilai <= 100 && $nilai >= 85) {
		$grade 	= "A";
		$ket	= "LULUS";
	} elseif ($nilai >= 75) {
		$grade 	= "B";
		$ket	= "LULUS";
	} elseif ($nilai >= 60) {
		$grade 	= "C";
		$ket	= "LULUS";
	} elseif ($nilai >= 45) {
		$grade 	= "D";
	} elseif ($nilai >= 0) {
		$grade 	= "E";
	}

	echo "Nilai Anda <strong>$nilai</strong>, Grade <strong>$grade</strong>, Anda <strong>$ket</strong>";
?>