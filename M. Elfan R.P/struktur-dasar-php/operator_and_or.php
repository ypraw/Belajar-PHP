<?php
	$a = false;
	$b = true;
	$c = true;

	echo '$a='.($a ? "TRUE" : "FALSE")."<br>";
	echo '$b='.($b ? "TRUE" : "FALSE")."<br>";
	echo '$c='.($c ? "TRUE" : "FALSE")."<br>";
	echo '$a && $b || $c = '.($a && $b || $c)."<br>";
	echo '$a AND $b || $c = '.($a AND $b || $c)."<br>";
?>