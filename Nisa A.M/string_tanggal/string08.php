<?php
$file  = "test.this.txt";
$ext1 = strstr($file, ".");
$ext2 = strchr($file, ".");
$ext3 = strrchr($file, ".");

echo $ext1."<br/>";
echo $ext2."<br/>";
echo $ext3;

//nama file menjadi ekstensi
?>