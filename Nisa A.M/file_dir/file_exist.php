<?php
$filename = "data.txt";

if(file_exists($filename)){
    echo "File $filename ADA";
}else{
    echo "File $filename TIDAK ADA";
}
?>

<!-- 
    file_exist($file) - memeriksa apakah $file ada atau tidak
    is_file($file) - memeriksa apakah $file adalah file atau bukan
    is_dir($file) - memeriksa apakah $file adalah direktori atau bukan
    is_executable($file) - memriksa apakah $file termmasuk file yang bisa dijalankan secara langsung atau bukan
    is_writable($file) - memeriksa apakah $file termasuk file yang bisa ditulis taua diedit
    is_readable($file)  - memeriksa apakan $file termasuk file yang bisa dibaca atau tidak
    filetime($file) - menghasilkan waktu akses terakhir file(unix timestamp) 
    filectime($file) - menghasilkan waktu pembuatan file(unix timestamp)
    filemtime($file) - menghasilkan waktu modifikasi terakhir file (dlm unix timestamp)
    filsize($file) - menghasilkan ukuran besar file(dlm byte)
    filetype($file) - menghasilkan jenis file
    copy($file1, $file2) - menduplikasi file $file1 ke $file2
    rename($file1, $file2) -  mengganti nama $file1 menjadi $file2
    $unlink($file)  - menghapus file $file
 -->