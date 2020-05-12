<?php
	$pres = array('Soekarno','Soeharto','Habibie','Gusdur','Megawati','SBY','Jokowi');
	echo 'Pesiden Indonesia : <br>';

	$i=1;
	foreach ($pres as $p) {
		echo "$i. $p <br>";
		$i++;
	}
?>