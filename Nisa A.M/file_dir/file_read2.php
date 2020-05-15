<?php
$namaFile = "data.txt";
$handle = fopen($namaFile, "r");
if(!$handle){
    echo "<b>File tidak dapat di buka atau belum ada</b>";
}else{
    echo "<b>Isi file : </b><br>";
    while($isi = fgets($handle, 2048)){
        echo "$isi<br>";
    }
}
fclose($handle);
?>

<!-- untuk membaca isi file, bisa menggunakan fungsi fgets() - tiap baris dan fread() - setiap jml byte tertentu -->