<?php
	function luas($p, $l)
	{
		return $p*$l;
	}
	function genap($aw, $ak)
	{
		for ($i = $aw; $i <= $ak ; $i++) {
			if ($i%2==0) {
				echo "$i ";
			}
		}
	}
	$arr = get_defined_functions();
	echo "<pre>";
	print_r ($arr);
	echo "</pre>";
?>