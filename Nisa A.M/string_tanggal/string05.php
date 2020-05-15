<?php
$no = 5678.91;

//english notasion(default)
$english_format_number = number_format($no);
echo "<br>".$english_format_number;

$nombre_format_francais = number_format($no, 2, ',','');
echo "<br>".$nombre_format_francais;

$format_ind  = number_format($no, 2,',','.');
echo "<br>$format_ind";

$no = 5678.9123;

//english without thousand operator
$english_format_number = number_format($no,2,'.','');
echo "<br>".$english_format_number;
?>