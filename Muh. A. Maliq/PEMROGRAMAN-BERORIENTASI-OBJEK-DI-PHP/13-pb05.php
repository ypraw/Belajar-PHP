<?php
	include_once "13-pb04.php";
	$a = new Mobil;
	$b = new Mobil;
	echo "<b>Mobil Pertama :</b><br>";
	$a->tampilWarna();
	echo "<br><b>Mobil Pertama Ganti Warna :</b><br>";
	$a->gantiWarna("Merah");
	$a->tampilWarna();
	echo "<br><b>Mobil Kedua :</b><br>";
	$a->gantiWarna("Hijau");
	$a->tampilWarna();
?>