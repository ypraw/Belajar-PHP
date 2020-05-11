<?php
$arrMobil = ['Kijang','Pajero','Inova','Karimun','Mobilio'];
echo "<b>Pencarian array dengan in_array ";
echo "<pre>";
print_r($arrMobil);
echo "</pre>";

if(in_array("Karimun", $arrMobil)){
    echo "Stok mobil Karimun ada di showroom<br>";
}else{
    echo "Mobil sudah terjual";
}

//memeriksa elemen ada atau tidak