<?php
$arrAngka = [1=>'satu', 3=>'tiga', 5=>'lima', 7=>'tujuh'];
echo "<b>Pencarian array dengan array_search ";
echo "<pre>";
print_r($arrAngka);
echo "</pre>";

$key = array_search('tiga', $arrAngka);
echo $key."<br/><br/>";
$key = array_search('tujuh', $arrAngka);
echo $key."<br/><br/>";

//mencari posisi key dari suatu value array