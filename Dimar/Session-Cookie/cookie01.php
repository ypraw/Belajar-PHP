<?php
$value = 'Lukman';
$value2 = 'Arif Lukmanul hakim';

setcookie("username",$value);
setcookie("namalengkap",$value2,time()+3600);

echo "<h1> Ini halman pengesetan cookie </h1>";
echo "<h2>Klik <a href='cookie02.php'>di sini </a> untuk pemeriksaan cookies </h2>";