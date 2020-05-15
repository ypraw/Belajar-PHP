<?php
$namaFile = "data.txt";
$handle = fopen($namaFile, "r");
if(!$handle){
    echo "<b>File tidak dapat di buka atau belum ada</b>";
}else{
    $isi = fgets($handle, 2048);
    //$isi2 = fread($handle, 20);
    echo "Isi 1 : $isi<br/>";
    //echo "Isi 2 : $isi<br/>";
}
fclose($handle);
?>