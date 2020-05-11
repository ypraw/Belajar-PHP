<?php 

	$i = 1;
	while ($i <= 10) {
		echo $i++;
	}

	echo "<br/><br/>";


	$i = 1;
	while ($i <= 10) :
		echo "$i";
		$i++;
	 endwhile;
	
	 echo "<br/><br/>";


	 $i = 1;
	 while ($i <= 6) {
	 	echo "<h$i>Heading $i</h$i>";
	 	$i++;
	 	# code...
	 }



 ?>