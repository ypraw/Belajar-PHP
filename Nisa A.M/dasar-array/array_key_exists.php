<?php
$arrTulis = ["Buku"=>6, "Pensil"=>9, "Bolpen"=>5, "Penggaris"=>4];
echo "<b>Pencarian array dengan array_key_exists ";
echo "<pre>";
print_r($arrTulis);
echo "</pre>";

if(array_key_exists("Bolpen",$arrTulis)){
    echo "Bolpen ada di meja <br/><br/>";
}else{
    echo "Tidak ada Bolpen ada di meja";
}

//memeriksa key ada atau tidak