<?php
	try {
		$dbh = new PDO("mysql:host=localhost;dbname=db_oop", "root", "");
		$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$stt = $dbh->prepare("INSERT INTO tbl_pegawai VALUES (?, ?, ?, ?, ?, ?, ?)");
		$stt->bindParam(1, $id_pegawai);
		$stt->bindParam(2, $nama_pegawai);
		$stt->bindParam(3, $jenis_kelamin);
		$stt->bindParam(4, $tgl_lahir);
		$stt->bindParam(5, $id_jabatan);
		$stt->bindParam(6, $foto);
		$stt->bindParam(7, $keterangan);

		$id_pegawai 	= NULL;
		$nama_pegawai 	= "Muhamad A. Maliq";
		$jenis_kelamin 	= "L";
		$tgl_lahir 		= "1995-05-21";
		$id_jabatan		= 2;
		$foto 			= "nama_foto01.jpg";
		$keterangan 	= "Staff";

		$stt->execute();
		echo $stt->rowCount()." Berhasil di Tambahkan";
		$dbh = NULL;
	} catch (Exception $e) {
		die("Kodeksi/Query Bermasalah ".$e->getMessage());
	}
?>