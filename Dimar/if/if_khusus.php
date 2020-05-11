<?php 

	$tahun = date("Y");
	$kabisat = ($tahun % 4 ==0) ? "KABISAT" : "BUKAN KABUSAT";
	echo "Tahun <b>$tahun</b> $kabisat";
	

 ?>