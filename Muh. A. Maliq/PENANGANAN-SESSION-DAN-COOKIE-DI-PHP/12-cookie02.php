<?php
	if (isset($_COOKIE["username"])) {
		echo "<h1>COOKIES 'username' ADA. Dengan isi : ".$_COOKIE["username"]."</h1>";
	} else {
		echo "<h1>COOKIES 'username' TIDAK ADA.!</h1>";
	}
	if (isset($_COOKIE["namalengkap"])) {
		echo "<h1>COOKIES 'namalengkap' ADA. Dengan isi : ".$_COOKIE["namalengkap"]."</h1>";
	} else {
		echo "<h1>COOKIES 'namalengkap' TIDAK ADA.!</h1>";
	}
	echo "<h2>Klik <a href='12-cookie01.php'>Disini</a> untuk membuat COOKIES</h2>";
	echo "<h2>Klik <a href='12-cookie03.php'>Disini</a> untuk menghapus COOKIES</h2>";
?>