<?php
$transport = ['bus', 'truck','motorcycle','ship'];
echo "<pre>";
print_r($transport);
echo "</pre>";

$mode = current($transport); //elemen yg ditunjuk pointer
echo $mode."<br>";
$mode = next($transport); //pointer pada elemen sesudahnya
echo $mode."<br>";
$mode = current($transport);
echo $mode."<br>";
$mode = prev($transport); //pointer pada elemen sebelumnya
echo $mode."<br>";
$mode = end($transport); //pointer menunjuk elemen [] terakhir
echo $mode."<br>";
$mode = current($transport);
echo $mode."<br>";

//key  = key yang ditunjuk pointer
//reset = restore
//count = jml elemen array