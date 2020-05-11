<?php
	$gaji = 3500000;
	$pajak = 0.1;
	$thp = $gaji - ($gaji * $pajak);
	echo "Gaji sebelum pajak : Rp. ".$gaji."<br>";
	echo "Gaji setelah pajak : Rp. ".$thp;
?>