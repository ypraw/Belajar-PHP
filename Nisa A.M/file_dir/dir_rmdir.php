<?php
$dir = "include";
$cek = mkdir($dir);
if($cek){
    echo "Direktori <b>$dir</> berhasil dibuat</br>";
}else{
    echo "Direktori <b>$dir</>gagal dibuat";
}

$del = rmdir($dir);
if($del){
    echo "Direktori <b>$dir</> berhasil dihapus";
}else{
    echo "Direktori <b>$dir</>gagal dihapus";
}
?>
<!-- rmdir() - hanya untuk menghapus dir kosong
rekursif() - menghapus isi dir -->

