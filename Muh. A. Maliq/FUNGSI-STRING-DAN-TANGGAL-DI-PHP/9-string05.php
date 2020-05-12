<?php
	$number = 5678.91;

	$english_format = number_format($number);
	echo "<br>".$english_format;
	$francis_format = number_format($number, 2, ",", " ");
	echo "<br>".$francis_format;
	$indonesia_format = number_format($number, 2, ",", ".");
	echo "<br>".$indonesia_format;
	$number = 5678.9123;
	$english_format = number_format($number, 2, ".", "");
	echo "<br>".$english_format;
?>