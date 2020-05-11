<?php 

	$nilai = 9;
	echo "Hasil Dengan shorthand: ";
	echo $nilai > 8 ? "Sangat Baik" : 'baik';
	echo "<br/>";

	echo "Hasil Tanpa shorthand : ";
	if ($nilai > 8) {
		echo "Sangat Baik";
	} else {
		echo "Baik";
	}


	//contoh shorthand bersarang

	echo "<br/> Hasil Dengan shorthand bersarang: ";

	$predikat = $nilai > 8 
	? 'Sangat Baik' 
	: ($nilai >= 7 && $nilai <= 8
		? 'Baik' ;echo "tidak"
		: ($nilai <= 6 && $nilai > 5
		? 'Sedang'
		: 'Kurang'));
	
	echo "Nilai anda $predikat";

	if($nilai > 8){
		$predikat = "Sangat Baik";
	} else if ($nilai >= 7 && $nilai <=8){
		$predikat = "baik";
	} else if ($nilai >= 6 && $nilai >5){
		$predikat = "sedang";
	} else {
		$predikat = 'kurang';
	}

	echo "Nilai anda $predikat";


 ?>