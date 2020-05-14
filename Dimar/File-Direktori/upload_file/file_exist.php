<?php
$filename = 'data.txt';

if(file_exists($filename)){
    echo "File $filename Ada";
}else{
    echo "File $filename Tidak ada";
}