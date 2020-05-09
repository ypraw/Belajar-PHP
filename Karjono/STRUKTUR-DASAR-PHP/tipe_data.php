<?php
$nim = "141160000";
$nama = 'Karjono';
$umur = 17;
$nilai = 82.25;
$status = TRUE;
echo "NIM : " . $nim . "<br>";
echo "Nama : $nama<br>";
print "Umur : " . $umur;
print "<br>";
printf("Nilai : %.3f<br>", $nilai);
if ($status)
    echo "Status : Aktif";
else
    echo "Status : Tidak Aktif";
