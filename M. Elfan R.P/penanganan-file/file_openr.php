<?php 	
	$n = 'data.txt';
	$h = fopen($n, 'r');

	if (!$h) {
		echo 'File cannot open or not exist';
	}else{
		echo 'File openned';
	}
	fclose($h);
 ?>