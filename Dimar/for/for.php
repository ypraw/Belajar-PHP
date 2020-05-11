<?php 

	for ($i=1; $i <=10 ; $i++) { 
		# code...
		echo "$i";
	}

	echo "<br/><br/>";

	for ($i=1; ; $i++) { 
		# code...
		if ($i>10) {
			# code...
			break;
		}
		echo "$i";
	}

	echo "<br/><br/>";

	$i = 1;
	for (;  ; ) { 
		# code...
		if ($i > 10) {
			break;
		}
	echo "$i";
	$i++;
	}


	echo "<br/><br>";

	for ($i=1; $i <= 10; print "$i", $i++);
	


 ?>