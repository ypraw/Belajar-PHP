<?php
	$value = "masmhaliq";
	$value2 = "Muhamad A. Maliq";

	setcookie("username", $value);
	setcookie("namalengkap", $value2, time()+3600);

	echo "<h1>Ini halaman percobaan COOKIES</h1>";
	echo "<h2>Klik <a href='12-cookie02.php'>Disini</a> untuk pemeriksaan COOKIES.";
?>