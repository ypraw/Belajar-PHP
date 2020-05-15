<?php 
	$f = 'data.txt';

	if (file_exists($f)) {
		echo "File $f ADA";
	}else{
		echo "File $f TIDAK ADA";
	}
?>