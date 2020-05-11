<?php
	$i = 1;
	while ($i <= 10) {
		echo $i++;
	}
	echo "<hr>";
	$i = 1;
	while ($i <= 10) {
		echo "$i";
		$i++;
	}
	echo "<hr>";
	$i = 1;
	while ($i <= 6) {
		echo "<h$i>Heading $i</h$i>";
		$i++;
	}
?>