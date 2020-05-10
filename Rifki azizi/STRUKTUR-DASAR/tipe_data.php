<?php
$nim = "18090020";
$nama = 'rifki';
$umur = 20 ;
$nilai = 88 . 89 ;
$status = TRUE;
echo "nim : " . $nim . "<br>";
echo "nama: $nama<br>";
print "umur: " . $umur;
print "<br>";
printf("nilai : %.3f<br>", $nilai);
if ($status)
    echo "status : aktif";
else
    echo "status : tidak aktif";