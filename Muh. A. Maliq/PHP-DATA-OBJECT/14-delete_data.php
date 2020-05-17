<?php
	try {
		$dbh = new PDO("mysql:host=localhost;dbname=db_oop", "root", "");
		$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$result = $dbh->query("DELETE FROM tbl_jabatan WHERE id_jabatan = 3");
		echo $result->rowCount()." Berhasil di Hapus";
		$dbh = NULL;
	} catch (Exception $e) {
		die("Kodeksi/Query Bermasalah ".$e->getMessage());
	}
?>