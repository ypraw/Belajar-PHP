<?php
$dir = "images";
$cek = mkdir($dir); //sertakan path jika diluar program
if($cek){
    echo "Direktori <b>$dir</> berhasil dibuat";
}else{
    echo "Direktori <b>$dir</>gagal dibuat";
}
?>