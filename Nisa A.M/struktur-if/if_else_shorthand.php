<?php 
$nilai = 9;
echo "Hasil dengan shorthand : ";
echo $nilai > 8 ? "Sangat baik " : "Baik"; //baik
echo "</br>";

echo "Nilai tanpa shorthand : ";
if($nilai > 8){
    echo "Sangat baik";
}else{
    echo "Baik";
}

echo "<br/> Hasil dengan shorthand bersarang :";
$predikat =  $nilai > 8
?'Sangat baik'
: ($nilai >= 7 && $nilai <= 8
    ?'Baik'
    : ($nilai <= 6 && $niali > 5
        ?'Sedang'
        :'Kurang'));
echo "Nilai anda $predikat";

echo "<br/>Hasil tanpa shorthand bersarang : ";
if($nilai > 8){
    $predikat = 'Sangat baik';
}elseif(($nilai >= 7 && $nilai <= 8)){
    $predikat = 'Baik';
}else if(($nilai <= 6 && $niali > 5)){
    $predikat = 'Sedang';
}else{
    $predikat = 'Kurang';
}
echo "Nilai anda $predikat";