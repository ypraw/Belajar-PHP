<?php 
	$n = 'data.txt';
	$h = fopen($n, 'r');
	if (!$h) {
		echo 'File cannot open or not exist';
	}else{
		echo 'Isi File : <br>';

		while ($i = fgets($h, 2048)) {
		    echo $i.'<br>';
		}
	}
	fclose($h);
 ?>