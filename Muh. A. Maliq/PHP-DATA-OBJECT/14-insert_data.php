<?php
	try {
		$dbh = new PDO("mysql:host=localhost;dbname=db_oop", "root", "");
		$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$result = $dbh->query("INSERT INTO tbl_jabatan VALUES (NULL, 'Direktur')");
		echo $result->rowCount()." Insert Data Jabatan Berhasil";
		$dbh = NULL;
	} catch (Exception $e) {
		die("Kodeksi/Query Bermasalah ".$e->getMessage());
	}
?>