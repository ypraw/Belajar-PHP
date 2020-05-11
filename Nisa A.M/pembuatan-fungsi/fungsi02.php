<?php
function genap($awal, $akhir){
    for($i = $awal; $i <= $akhir; $i++){
        if($i%2 == 0){
            echo "$i ";
        }
    }
}

$x = 10;
$y = 50;
echo "<b>Bilangan genap dari $x sampai $y : </b><br/>";
genap($x, $y);