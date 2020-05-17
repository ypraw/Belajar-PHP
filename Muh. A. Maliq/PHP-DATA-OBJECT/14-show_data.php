<?php
	try {
		$dbh = new PDO("mysql:host=localhost;dbname=db_oop", "root", "");
		$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$result = $dbh->query("SELECT * FROM tbl_jabatan");
		while ($row = $result->fetch()) {
			echo "$row[id_jabatan] $row[nama_jabatan] <br>";
		}
		$dbh = NULL;
	} catch (Exception $e) {
		die("Kodeksi/Query Bermasalah ".$e->getMessage());
	}
?>