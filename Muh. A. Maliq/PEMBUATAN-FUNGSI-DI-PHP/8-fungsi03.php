<?php
	function luas_persegi($panjang, $lebar) {
		return $panjang * $lebar;
	}
	$p = 5;
	$l = 10;
	echo "<b>Luas Persegi dengan Panjang $p dan Lebar $l = ".luas_persegi($p, $l);
?>