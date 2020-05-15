<?php
	session_start();
	if (isset($_SESSION['login'])) {
		unset($_SESSION);
		session_destroy();

		echo "<h1>Anda Berhasil Logout</h1>";
		echo "<h2>Silahkan Login <a href='session01.php'>Disini</a></h2>";
		echo "<h2>Anda Tidak Bisa Masuk ke Halaman <a href='session02.php'>Ini</a></h2>";
	}
?>