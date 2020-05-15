<?php
$namaFile = "data.txt";
$handle = fopen($namaFile, "w");
if(!$handle){
    echo "<b>File tidak dapat di buka atau belum ada</b>";
}else{
    echo "<b>File berhasil di buka</b>";
}
fclose($handle);
?>