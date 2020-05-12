<?php
	$t = 'test.this.txt';
	$x1 = strstr($t, '.');
	$x2 = strchr($t, '.');
	$x3 = strrchr($t, '.');

	echo '<br>'.$x1;
	echo '<br>'.$x2;
	echo '<br>'.$x3;