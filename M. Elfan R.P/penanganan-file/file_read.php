<?php 
	$n = 'data.txt';
	$h = fopen($n, 'r');
	if (!$h) {
		echo 'File cannot open or not exist';
	}else{
		$i = fgets($h, 2048);

		echo 'Isi 1 : '.$i.'<br>';
	}
	fclose($h);
 ?>