<?php
	function genap() {
		$x = 0;
		$br = "";
		for ($i=0; $i <= 200; $i++) { 
			if ($i % 2 == 0) {
				$x++;
				if ($x == 40) {
					$br = "<br>";
					$x = 0;
				}
				echo "$i ".$br;
				if ($br == "<br>") {
					$br = "";
				}
			}
		}
	}
	genap();
?>