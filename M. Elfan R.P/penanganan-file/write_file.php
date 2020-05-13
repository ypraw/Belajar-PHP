<?php 
	$n = 'data.txt';
	$h = fopen($n, 'w');
	if (!$h) {
		echo 'File cannot open or not exist';
	}else{
		fwrite($h, "Jurusan TI \n");
		fputs($h, "Univ PHP Online \n");
		echo 'File creted';
	}
	fclose($h);
 ?>