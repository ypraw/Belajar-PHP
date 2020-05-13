<?php 
	$c = 'counter.txt';
	if (!file_exists($c)) {
		fopen($c, 'w');
	}
	$f = fopen($c, 'r');

	$cx = fread($f, 10);
	fclose($f);

	$cx++;

	echo 'Anda adalah pengunjung ke - '.$cx;
	$f = fopen($c, 'w');
	fwrite($f, $cx);
	fclose($f);
 ?>