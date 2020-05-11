<?php
	$arrMobil = array("Kijang", "Pajero", "Inova", "Karimun", "Mobilio");
	echo "<b>Pencarian Array in_array :</b><br>";
	echo "<pre>";
	print_r($arrMobil);
	echo "</pre>";
	echo "<hr>";
	if (in_array("Karimun", $arrMobil)) {
		echo "Stock Mobil Karimun masih ada di Showroom";
	} else {
		echo "Mobil Sudah Terjual";
	}
?>