<?php 
	$d = 'images';
	$c = mkdir($d);
	if ($c) {
		echo 'Success create <b>'.$d.'</b><br>';
	}else{
		echo 'Error create <b>'.$d.'</b>';
	}
 ?>