<?php 

	$warna = array("merah","hijau","biru","ungu","jingga","kuning");
	echo "<pre>";
	print_r(array_chunk($warna, 2));
	echo "</pre>";

	echo "<pre>";
	print_r(array_chunk($warna, 2,true));
	echo "</pre>";


 ?>