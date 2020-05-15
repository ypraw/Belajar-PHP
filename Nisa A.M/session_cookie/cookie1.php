<?php
$value = 'Nisa';
$value2 = 'Agustina';

setcookie("username", $value);
setcookie("namalengkap", $value2, time()+3600);

echo "<h1>Ini halaman pengetesan cookie<h1>";
echo "<h2>Klik <a href='cookie2.php'> disini</a> untuk pemeriksaan cookie </h2>";
?>

<!-- penyimpanan cookie beradadi client -->
