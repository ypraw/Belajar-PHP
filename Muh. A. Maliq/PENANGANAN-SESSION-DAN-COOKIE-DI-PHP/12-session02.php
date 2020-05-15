<?php
	session_start();
	if (isset($_SESSION["login"])) {
		echo "<h1>Selamat Datang ".$_SESSION["login"]."</h1>";
		echo "<h2>Halaman ini hanya bisa diakses jika anda sudah LOGIN.</h2>";
		echo "<h2>Klik <a href='12-session03.php'>Disini (12-session03.php)</a> untuk LOGOUT</h2>";
	} else {
		die("<h2>Anda belum LO IN.! Anda tidak bisa masuk ke halaman ini.<br>Silahkan Login <a href='12-session01.php'>Disini</a></h2>");
	}
?>