<?php
	$arrAngka = array(
		1 => "Satu",
		3 => "Tiga",
		5 => "Lima",
		7 => "Tujuh"
	);
	echo "<b>Pencarian Array array_search :</b><br>";
	echo "<pre>";
	print_r($arrAngka);
	echo "</pre>";
	echo "<hr>";
	$key = array_search("Tiga", $arrAngka);
	echo $key."<br><br>";
	$key = array_search("Tujuh", $arrAngka);
	echo $key;
?>