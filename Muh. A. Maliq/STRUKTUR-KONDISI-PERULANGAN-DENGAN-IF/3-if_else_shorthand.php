<?php
	$nilai = 9;
	echo "Hasil dengan Shorthand : ";
	echo $nilai > 8 ? "Sangat Baik" : "Baik";
	echo "<br>";
	echo "Hasil tanpa Shorthand : ";
	if ($nilai > 8) {
		echo "Sangat Baik";
	} else {
		echo "Baik";
	}
	echo "<br>Hasil dengan Shorthand bersarang : ";
	$predikat = $nilai > 8 ? "Sangat Baik" : ($nilai >= 7 && $nilai <= 8 ? "Baik" : ($nilai <= 6 && $nilai > 5 ? "Sedang" : "Kurang"));
	echo "Nilai Anda $predikat";
	echo "<br>Hasil tanpa Shorthand bersarang : ";
	if ($nilai > 8) {
		$predikat = "Sangat Baik";
	} elseif ($nilai >= 7 && $nilai <= 8) {
		$predikat = "Baik";
	} elseif ($nilai <= 6 && $nilai > 5) {
		$predikat = "Sedang";
	} else {
		$predikat = "Kurang";
	}
	echo "Nilai Anda $predikat";
?>