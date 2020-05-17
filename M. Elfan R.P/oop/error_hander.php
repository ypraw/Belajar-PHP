<?php
	try {
		$db = new PDO('mysql:host=localhost;dbname=db_oop', 'root', '');

		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		echo "Koneksi Berhasil";
		$db = null;
	} catch (PDOException $e) {
		die("Koneksi Gagal ". $e->getMessage());
	}
?>