<?php 

	$arrNilai = array("Kevin" => 80, "Dimar" => 99, "Icha" => 98);

	echo $arrNilai['Kevin'];
	echo $arrNilai['Dimar'];

	$arrNilai = array();
	$arrNilai ['Kevin'] = 90;
	$arrNilai ['Dimar'] = 99+1;
	$arrNilai ['Icha'] = 100;
	echo $arrNilai['Dimar'];
	echo $arrNilai['Icha'];


 ?>