<?php 
	$d = dirname(__FILE__).'/images';
	if ($h = opendir($d)) {
		while (false !== ($f = readdir($h))) {
		    if ($f != '.' && $f != '..') {
		    	echo $f.'<br>';
		    }
		}
		closedir($h);
	}
 ?>