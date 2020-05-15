<?php
	$v = 'Elfan';
	$x = 'Elfan Rodhian';

	setcookie('username', $v);
	setcookie('nama', $x, time()+3600);

	echo "<h1>Ini Halaman pengesetan cookie</h1>";
	echo "<h2>Klik <a href='cookie02.php'>Disini</a> untuk pemeriksaan Cookie</h2>";
?>