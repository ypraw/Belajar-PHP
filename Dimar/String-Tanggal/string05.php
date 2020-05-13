<?php 

	
	$number = 5678.91;

	//english notation (default);
	$english_format_number = number_format($number);
	echo "<br/>".$english_format_number;

	//french notation
	$nombre_format_francis = number_format($number,2,'.',' ');
	echo "<br/>".$nombre_format_francis;

	//indonesia notation
	$format_indonesia = number_format($number,2,',','.');
	echo "<br/>".$format_indonesia;

	$number = 5678.9123;
	//english notation without thousand separator
	$english_format_number;
	echo "<br>".$english_format_number;



 ?>