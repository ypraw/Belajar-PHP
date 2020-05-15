<?php 

	//break menghentikan suatu proses yang berjalan dalam looping;

	for ($i=1; $i < 10 ; $i++) { 
		if ($i == 5)
			continue;
		if($i == 8)
			break;
		echo "$i";
	}

	

 ?>

