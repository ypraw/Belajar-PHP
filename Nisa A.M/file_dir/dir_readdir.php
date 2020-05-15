<?php
$dir = dirname(__FILE__)."/images"; //saat ini
if($handle = opendir($dir)){
    while(false !== ($file = readdir($handle))){
        if($file != "."&&$file !=".."){
            echo "$file<br/>";
        }
    }
    closedir($handle);
}

?>