<?php
	session_start();
	if (isset($_SESSION["login"])) {
		unset($_SESSION["login"]);
		session_destroy();
		echo "<h1>Anda telah LOG OUT</h1>";
		echo "<h2>Klik <a href='12-session01.php'>Disini</a> untuk LOG IN kembali.";
		echo "<h2>Anda sekarang tidak bisa masuk ke halaman <a href='12-session02.php'>12-session02.php</a> lagi.";
	}
?>