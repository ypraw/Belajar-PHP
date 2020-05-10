<?php
$tahun= date("Y");
$Kkabisat=($tahun % 4==0) ? "KABISAT" : "BUKAN KABISAT";
echo "Tahun <b>$tahun</b> $Kkabisat";

?>