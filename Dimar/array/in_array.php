<?php 
	
	$arrMobil = array("Kijang","Pajero","Inova","Karimun","Mobilio");
	echo "<b>Pencarian Array dengan in_array";
	echo "<pre>";
	print_r($arrMobil);
	echo " </pre>";

	if (in_array("Karimun", $arrMobil)) {
		echo "Stok Mobil Karimun masih ada di showroom<br>";
	} else {
		echo "Mobil sudah terjual";
	}


 ?>