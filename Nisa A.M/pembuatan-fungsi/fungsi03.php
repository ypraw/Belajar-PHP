<?php
function luas_ps($panjang, $lebar){
    return $panjang * $lebar;
}

$p = 5;
$l = 10;
echo "Luas persegi panjang dengan panjang $p dan  lebar $l = ". luas_ps($p, $l);