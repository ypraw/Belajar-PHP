<?php
$nisn = "0026917637";
$nama = 'Nisa Agustina';
$umur = 17;
$nilai = 92.25;
$status = TRUE;
    echo "NISN : ".$nisn."<br>";
    echo "Nama : $nama<br>";
    print "Umur : ".$umur;
    print "<br>";
    printf("Nilai : %.3f<br>", $nilai);
    if($status)
        echo "Status : Aktif";
    else
        echo "Status : Tidak Aktif";


    /*%d = int, notasi desimal
    %b = int, binary
    %o = int, oktal
    %x = int, hexadesimal (kecil)
    %X = int, desimal (Kapotal)
    %c = char yang nilai ASCIInya dlm argumen
    %s = string
    %f = double (bil. real)
    */
?>

