<?php
	try {
		$dbh = new PDO("mysql:host=localhost;dbname=db_oop", "root", "");
		$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$result = $dbh->query("UPDATE tbl_jabatan SET nama_jabatan = 'Manager Utama' WHERE id_jabatan = 1");
		echo $result->rowCount()." Berhasil di Perbaharui";
		$dbh = NULL;
	} catch (Exception $e) {
		die("Kodeksi/Query Bermasalah ".$e->getMessage());
	}
?>