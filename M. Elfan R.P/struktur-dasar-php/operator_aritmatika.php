<?php 
	$gaji = 5000000;
	$pajak = 0.1;
	$thp = $gaji - ($gaji*$pajak);
	echo "Gaji Sebelum Pajak : Rp. ".number_format($gaji,2,',','.')."<br>";
	echo "Gaji Setelah Pajak : Rp. ".number_format($thp,2,',','.');
?>