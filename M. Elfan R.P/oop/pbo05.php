<?php
	include_once "pbo04.php";
	$a = new Mobil();
	$b = new Mobil();
	echo "<b>Mobil pertama</b><br>";
	$a->tampilWarna();
	echo "<br>Mobil pertama ganti warna<br>";

	$a->gantiWarna("Merah");
	$a->tampilWarna();

	echo "<br><b>Mobil kedua</b><br>";
	$b->gantiWarna("Hijau");
	$b->tampilWarna();
?>