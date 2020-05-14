<?php
$file = "data.txt";

if(is_file($file)){
    echo "File <b>$file</b> adalah FILE <br/>";
    //
    if(is_executable($file)){
        echo "File <b>$file</b> bisa dijalankan secara langsung (executable)<br/>";
    }else{
        echo "File <b>$file</b> Tidak exe";
    }
    if(is_writable($file)){
        echo "File <b>$file</b> bisa ditulis/didit<br/>";
    }else{
        echo "File <b>$file</b> Tidak ";
    }
    if(is_readable($file)){
        echo "File <b>$file</b> bisa dibaca<br/>";
    }else{
        echo "File <b>$file</b> Tidak.";
    }


echo "Akses terakhir file <b>$file</b>=".date("d-m-Y H:i:s.",fileatime($file))."<br/>";
echo "<b>$file</b> dibuat: ".date("d-m-Y H:i:s.",filectime($file))."<br/>";
echo "<b>$file</b> dimodifikasi:".date("d-m-Y H:i:s.",filemtime($file))."<br/>";
echo "<b>$file</b> ukuran :".filesize($file)."<br/>";
echo "<b>$file</b> jenis file:".filetype($file)."<br/>";
} else if (is_dir($file)){
    echo "File <b>$file</b> adalah DIREKTORI<br/>";
} else {
    echo "File <b>$file</b> tidak dikenal <br/>";
}