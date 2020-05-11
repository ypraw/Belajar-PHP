<?php
	$warna = array("Merah", "Hijau", "Biru", "Ungu", "Jingga", "Kuning");
	echo "<pre>";
	print_r(array_chunk($warna, 2));
	echo "</pre>";
	echo "<hr>";
	echo "<pre>";
	print_r(array_chunk($warna, 2, true));
	echo "</pre>";
?>