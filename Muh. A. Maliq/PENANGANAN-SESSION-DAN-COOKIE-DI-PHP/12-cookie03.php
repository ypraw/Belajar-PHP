<?php
	setcookie("username", "", time()-3600);
	setcookie("namalengkap", "", time()-3600);
	echo "<h1>COOKIES berhasil dihapus</h1>";
	echo "<h2>Klik <a href='12-cookie01.php'>Disini</a> untuk membuat COOKIES</h2>";
	echo "<h2>Klik <a href='12-cookie02.php'>Disini</a> untuk pemeriksaan COOKIES</h2>";
?>