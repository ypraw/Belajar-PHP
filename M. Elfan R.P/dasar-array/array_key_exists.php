<?php
	$arrT = array('buku'=>6,'pensil'=>10,'bulpen'=>15,'penggaris'=>5);
	echo 'Pencarian dengan array_key_exists';
	echo '<pre>';
	print_r($arrT);
	echo '</pre>';

	if (array_key_exists('bulpen', $arrT)) {
		echo 'Bulpen ada di meja <br>';
	}else{
		echo 'Tidak ada bulpen di meja';
	}
?>