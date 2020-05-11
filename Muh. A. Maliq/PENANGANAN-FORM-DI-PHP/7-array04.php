<?php
	$arrNilai = array(
		'Ani'	=> 80,
		"Otim"	=> 90,
		"Ana"	=> 75,
		"Budi"	=> 85
	);
	echo "Menampilkan isi Array dengan Foreach :<br>";
	foreach ($arrNilai as $nama => $nilai) {
		echo "Nilai $nama = $nilai<br>";
	}
	echo "<hr>";
	echo "Menampilkan isi Array dengan While dan List :<br>";
	reset($arrNilai);
	while(list($nama, $nilai) = each($arrNilai)) {
		echo "Nilai $nama = $nilai<br>";
	}
?>