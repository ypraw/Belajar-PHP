<?php
$nilai = 9;
echo "Hasil Dengan shorthand : ";
echo $nilai > 8 ? 'Sangat Baik' : 'Baik'; // Baik
echo "<br/>";
// jika ditulis dalam struktur if else biasa akan seperti
echo "Hasil Tanpa shorthand : ";

if ($nilai > 8) {
    echo 'Sangat Baik';
} else {
    echo 'Baik';
}

//contoh shorthand bersarang
echo "<br/> Hasil Dengan shorthand bersarang : ";

$predikat = $nilai > 8
    ? 'Sangat Baik'
    : ($nilai >= 7 && $nilai <= 8
        ? 'Baik'
        : ($nilai <= 6 && $nilai > 5
            ? 'Sedang'
            : 'Kurang'));
echo "Nilai anda $predikat";

//contoh if else bersarang
echo "<br/> Hasil Tanpa shorthand bersarang : ";
if ($nilai > 8) {
   $predikat = 'Sangat Baik';
} else if ($nilai >= 7 && $nilai <= 8) {
   $predikat = 'Baik';
} else if ($nilai <= 6 && $nilai > 5) {
   $predikat = 'Sedang';
} else {
   $predikat = 'Kurang';
}
echo "Nilai anda $predikat" ;