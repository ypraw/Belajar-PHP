<?php
	$trans = array('bus','truck','motor','train');
	echo '<pre>';
	print_r($trans);
	echo '</pre>';

	$mode = current($trans);
	echo $mode.'<br>';
	$mode = next($trans);
	echo $mode.'<br>';
	$mode = current($trans);
	echo $mode.'<br>';
	$mode = prev($trans);
	echo $mode.'<br>';
	$mode = end($trans);
	echo $mode.'<br>';
	$mode = current($trans);
	echo $mode.'<br>';
?>