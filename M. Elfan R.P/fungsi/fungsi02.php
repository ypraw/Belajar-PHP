<?php
	function genap($aw, $ak)
	{
		for ($i = $aw; $i <= $ak ; $i++) {
			if ($i%2==0) {
				echo "$i ";
			}
		}
	}

	$x = 10;
	$y = 50;
	echo "<b>Bilangan Genap dari $x sampai $y : </b><br>";
	genap($x,$y);
?>