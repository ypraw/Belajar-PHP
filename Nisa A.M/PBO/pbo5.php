<?php
include_once "pbo4.php";
$a = new Mobil();
$b = new Mobil();
echo "<b>Mobil pertama</b><br/>";
$a->tampilWarna();
echo "<br>Mobil pertama ganti warna<br>";

$a->gantiWarna("Merah");
$a->tampilWarna();

echo "<br><b>Mobil Kedua</b><br>";
$b->gantiWarna("Hijau");
$b->tampilWarna();