<?php
	$arrA = array(
		1=>'satu',
		3=>'tiga',
		5=>'lima',
		7=>'tujuh'
	);

	echo 'Pencarian dengan array_search';
	echo '<pre>';
	print_r($arrA);
	echo '</pre>';

	$key = array_search('tiga', $arrA);
	echo $key.'<br><br>';

	$key = array_search('tujuh', $arrA);
	echo $key.'<br><br>';
?>