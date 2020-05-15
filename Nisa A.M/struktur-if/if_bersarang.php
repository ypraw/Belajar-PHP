<?php
$nilai = 78;
$grade = "~";
$ket = "GAGAL";
if($nilai <= 100 && $nilai >=85){
    $grade = "A";
    $ket = "LULUS";
}else if($nilai >= 75){
    $grade = "B";
    $ket = "LULUS";
}else if($nilai >= 60){
    $grade = "C";
    $ket = "LULUS";
}else if($nilai >= 45){
    $grade = "D";
}else if($nilai >= 0){
    $grade = "E";
}else{
    $grade = "~";
}
echo "Nilai Anda $nilai Grade $grade, anda $ket";