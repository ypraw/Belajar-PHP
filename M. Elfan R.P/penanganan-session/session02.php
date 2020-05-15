<?php 
	session_start();

	if (isset($_SESSION['login'])) {
		echo "<h1>Selamat Datang ".$_SESSION['login']."</h1>";
		echo "<h2>Klik <a href='session03.php'>Disini</a> untuk Logout</h2>";
	} else {
		die("<h2>Anda Belum Login .<br> Silahkan Login <a href='session01.php'>Disini</a></h2>");
	}
?>