<?php
	$arrTulis = array(
		"Buku"		=> 6,
		"Pensil"	=> 9,
		"Bolpoint"	=> 5,
		"Penggaris"	=> 4
	);
	echo "<b>Pencarian Array dengan array_key_exists :</b><br>";
	echo "<pre>";
	print_r($arrTulis);
	echo "</pre>";
	echo "<hr>";
	if (array_key_exists("Bolpoint", $arrTulis)) {
		echo "Bolpoint ada di Meja<br><br>";
	} else {
		echo "Tidak ada Bolpoint di Meja";
	}
	
?>