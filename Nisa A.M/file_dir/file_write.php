<?php
$namaFile = "data.txt";
$handle = fopen($namaFile, "w");
if(!$handle){
    echo "<b>File tidak dapat di buka atau belum ada</b>";
}else{
    fwrite($handle, "Fakultas Teknologi Informasi \n");
    fputs($handle, "Universitas Whatsapp Online \n");
    //file_put_contents($namaFile,"Jkt");
    echo "<b>File berhasil ditulis</b>";
}
fclose($handle);
?>

<!-- untuk menulis ke file dengan fwrite() dan fputs().
Variable $handle merupakan mode pengaksesan file, dimana mode yang harus digunakan harus bisa menulis ke file(w, a, file_puts_contents($namaFile, ""))-->