<?php
	try {
		$db = new PDO('mysql:host=localhost;dbname=db_oop', 'root', '');

		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$res = $db->query("SELECT * FROM tbl_jabatan");

		while ($row = $res->fetch()) {
			echo $row['id_jabatan'].' '.$row['nama_jabatan'];    
		}

		$db = null;
	} catch (PDOException $e) {
		die("Query / Koneksi Gagal ". $e->getMessage());
	}

?>