<?php
	$transpot = array("Bus", "Truck", "Motorcicle", "Ship");
	echo "<pre>";
	print_r($transpot);
	echo "</pre>";
	echo "<hr>";
	$mode = current($transpot);
	echo $mode."<br>";
	$mode = next($transpot);
	echo $mode."<br>";
	$mode = current($transpot);
	echo $mode."<br>";
	$mode = prev($transpot);
	echo $mode."<br>";
	$mode = end($transpot);
	echo $mode."<br>";
	$mode = current($transpot);
	echo $mode;
?>