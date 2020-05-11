<?php
	$user	= "";
	if (!isset($user)) {
		echo "Variabel tidak ada/belum terbentuk";
	} else {
		echo "Variabel ada";
	}
	echo "<hr>";
	$a = "vara";
	$b = "varb";
	var_dump(isset($a));		// TRUE
	var_dump(isset($a, $b));	// TRUE
	unset($a);
	echo "<hr>";
	var_dump(isset($a));		// FALSE
	var_dump(isset($a, $b));	// FALSE
	echo "<hr>";
	$foo = NULL;
	var_dump(isset($foo));		// FALSE
?>