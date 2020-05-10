<?php
$nilai=9;
echo "Hasil dengan shorthand : ";
echo $nilai > 8 ? 'Sangat baik' : 'Baik'; //Baik
echo "<br/>";
// Jika ditulis dalam struktur if else  biasa akan seperti
echo "Hasil tanpa shorthand :";

if ($nilai > 8){
    echo 'Sangat baik';
}else {
    echo ' baik';
}

//contoh shorthand bersarang
echo "<br/> Hasil Dengan Shorthand bersarang :";

$predikat = $nilai > 8
    ? 'Sangat baik'
    : ($nilai >=7 && $nilai <=8
        ? 'Baik'
        : ($nilai <= 6 && $nilai > 5
            ? 'Sedang'
            : 'Kurang' ));
echo "Nilai anda $predikat";

//Contoh if bersarang
echo "<br/> Hasil tanpa shorthand bersarang :";
if ($nilai > 8){
        $predikat = 'Sangat baik';
} elseif ($nilai >=7 && $nilai <=8){
        $predikat = 'Baik';
}elseif ($nilai <=6 &&  $nilai > 5){
        $predikat='Kurang';
}
echo "Nilai anda $predikat";
?>