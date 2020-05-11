<?php
	$warna = array('merah','jingga','kuning','hijau','biru','nila','ungu');
	echo '<pre>';
	print_r(array_chunk($warna, 2));
	echo '</pre>';

	echo '<pre>';
	print_r(array_chunk($warna, 2,true));
	echo '</pre>';
?>