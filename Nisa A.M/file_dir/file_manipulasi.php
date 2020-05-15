<?php
$file = "data.txt";
$filebaru = "databaru.txt";
$filebaru2 = "databaru2.txt";
if(copy($file, $filebaru)){
    echo "File <b>$file</b> berhasil di copy menjadi <b>$filebaru<b/>.<br/>";
}
if(rename($filebaru, $filebaru2)){
    echo "File <b>$filebaru</b> berhasil di rename menjadi <b>$filebaru2</b>.<br/>";
}
if(unlink($filebaru2)){
    echo "File <b>$filebaru2</b> berhasil di hapus.";
}
?>