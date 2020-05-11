<?php
	$a = FALSE;
	$b = TRUE;
	$c = TRUE;
	echo '$a = '.($a ? "TRUE" : "FALSE")."<br>";
	echo '$b = '.($b ? "TRUE" : "FALSE")."<br>";
	echo '$c = '.($c ? "TRUE" : "FALSE")."<br>";
	echo '$b && $b || $c = '.($a && $b || $c).'<br>';
	echo '$b AND $b || $c = '.($a and $b || $c);
?>