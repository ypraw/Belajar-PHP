<?php
	try {
		$db = new PDO('mysql:host=localhost;dbname=db_oop', 'root', '');

		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$res = $db->query("UPDATE tbl_jabatan SET  nama_jabatan = 'Direktur Utama' WHERE id_jabatan=1 ");

		echo $res->rowCount(). " Berhasil Diedit";
		$db = null;
	} catch (PDOException $e) {
		die("Query / Koneksi Gagal ". $e->getMessage());
	}

?>