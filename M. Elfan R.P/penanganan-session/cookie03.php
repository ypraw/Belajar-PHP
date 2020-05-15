<?php
	setcookie('username', '', time()-3600);
	setcookie('nama', '', time()-3600);

	echo "<h1>Cookie Berhasil Dihapus</h1>";
	echo "<h2>Klik <a href='cookie01.php'>Disini</a> untuk membuat Cookie</h2>";
	echo "<h2>Klik <a href='cookie02.php'>Disini</a> untuk melihat Cookie</h2>";
?>