<?php 
	
	$dir = "images2";
	$cek = mkdir($dir);
	if ($cek){
		echo "Direktori <b>$dir</b> berhasil dibuat";
	}else{
		echo "Direktori <b>$dir</b> gagal dibuat";
	}


 ?>