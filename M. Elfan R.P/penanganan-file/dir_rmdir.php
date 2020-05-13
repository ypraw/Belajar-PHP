<?php 
	$d = 'include';
	$c = mkdir($d);
	if ($c) {
		echo 'Success create <b>'.$d.'</b><br>';
	}else{
		echo 'Error create <b>'.$d.'</b>';
	}

	$dl = rmdir($d);
	if ($dl) {
		echo 'Success delete <b>'.$d.'</b>';
	}else{
		echo 'Error delete <b>'.$d.'</b>';
	}
 ?>