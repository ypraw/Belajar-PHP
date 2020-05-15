<?php
	if (isset($_COOKIE['username'])) {
		echo "<h1>Cookie 'username' ada. Isinya : ".$_COOKIE['username']."</h1>";
	} else {
		echo "<h1>Cookie 'username' Tidak Ada</h1>";
	}

	if (isset($_COOKIE['nama'])) {
		echo "<h1>Cookie 'nama' ada. Isinya : ".$_COOKIE['nama']."</h1>";
	} else {
		echo "<h1>Cookie 'nama' Tidak Ada</h1>";
	}

	echo "<h2>Klik <a href='cookie01.php'>Disini</a> untuk membuat Cookie</h2>";
	echo "<h2>Klik <a href='cookie03.php'>Disini</a> untuk menghapus Cookie</h2>";
?>