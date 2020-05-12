<?php
	$nilai	= 9;
	echo "Hasil dengan ShortHand : ";
	echo $nilai > 8 ? "Sangat Baik" : "Baik";

	echo '<br>';
	echo "Hasil tanpa ShortHand : ";

	if ($nilai > 8) {
		echo 'Sangat Baik';
	} else {
		echo 'Baik';
	}

	echo "<br> Hasil dengan ShortHand bersarang : ";

	$predikat = $nilai > 8
		? 'Sangat Baik'
		: ($nilai >= 7 && $nilai <= 8
			? 'Baik'
			: ($nilai <= 6 && $nilai > 5
				? 'Sedang'
				: 'Kurang'));

	echo "Nilai anda $predikat";

	echo "<br> Hasil dengan ShortHand bersarang : ";
	if ($nilai > 8) {
		$predikat = 'Sangat Baik';
	} elseif ($nilai >= 7 && $nilai <= 8) {
		$predikat = 'Baik';
	} elseif ($nilai <= 6 && $nilai > 5) {
		$predikat = 'Sedang';
	} else {
		$predikat = 'Kurang';
	}

	echo "Nilai anda $predikat";
?>