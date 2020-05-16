<?php
	try {
		$dbh = new PDO("mysql:host=localhost;dbname=db_oop", "root", "");
		$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		echo "Koneksi Database Berhasil";
		$dbh = NULL;
	} catch (Exception $e) {
		die("Kodeksi Database Gagal ".$e->getMessage());
	}
?>