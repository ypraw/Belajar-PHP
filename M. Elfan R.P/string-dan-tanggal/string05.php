<?php
	$n = 5678.91;

	echo number_format($n).'<br>';
	echo number_format($n,2,',',' ').'<br>';
	echo number_format($n,2,',','.').'<br>';

	$n = 5678.9123;
	echo number_format($n,2,'.','');
?>