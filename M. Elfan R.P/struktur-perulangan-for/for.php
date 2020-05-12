<?php
	for ($i = 1; $i <= 10; $i++) {
		echo $i;
	}
	echo '<br><br>';

	for ($i = 1; ; $i++) {
		if ($i > 10) {
			break;
		}
		echo $i;
	}
	echo '<br><br>';

	$i = 1;
	for (; ;) {
		if ($i > 10) {
			break;
		}
		echo $i;
		$i++;
	}
	echo '<br><br>';

	for ($i = 1; $i <= 10; print $i, $i++);
?>