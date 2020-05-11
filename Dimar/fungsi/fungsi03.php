<?php 


	function luas_persegi_panjang($panjang,$lebar){
		return $panjang * $lebar;
	}


	//pemanggilan fungsi

	$p = 5;
	$i = 10;

	echo "Luas Persegi Panjang dengan Panjang $p dan luas $i = ".luas_persegi_panjang($p,$i);

 ?>