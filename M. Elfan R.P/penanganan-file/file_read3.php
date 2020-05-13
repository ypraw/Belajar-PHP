<?php 
	$n = 'data.txt';
	$h = @fopen($n, 'r');
	if ($h) {
		echo 'Isi File : <br>';

		while (!feof($h)) {
			$b = fgets($h, 4096);
		    echo $b.'<br>';
		}
	}
	fclose($h);
 ?>