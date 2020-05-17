<?php
	try {
		$db = new PDO('mysql:host=localhost;dbname=db_oop', 'root', '');

		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$res = $db->query("INSERT INTO tbl_jabatan VALUES (NULL, 'Direktur')");

		echo $res->rowCount(). " Berhasil ditambahkan ke Tabel Jabatan";
		$db = null;
	} catch (PDOException $e) {
		die("Query / Koneksi Gagal ". $e->getMessage());
	}

?>