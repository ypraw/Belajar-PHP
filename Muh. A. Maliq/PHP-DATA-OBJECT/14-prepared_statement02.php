<?php
	try {
		$dbh = new PDO("mysql:host=localhost;dbname=db_oop", "root", "");
		$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$stt = $dbh->prepare("INSERT INTO tbl_pegawai VALUES (:id_pegawai, :nama_pegawai, :jenis_kelamin, :tgl_lahir, :id_jabatan, :foto, :keterangan)");
		$stt->bindParam(':id_pegawai', $id_pegawai);
		$stt->bindParam(':nama_pegawai', $nama_pegawai);
		$stt->bindParam(':jenis_kelamin', $jenis_kelamin);
		$stt->bindParam(':tgl_lahir', $tgl_lahir);
		$stt->bindParam(':id_jabatan', $id_jabatan);
		$stt->bindParam(':foto', $foto);
		$stt->bindParam(':keterangan', $keterangan);

		$id_pegawai 	= NULL;
		$nama_pegawai 	= "Muhamad A. Karim";
		$jenis_kelamin 	= "L";
		$tgl_lahir 		= "1992-08-01";
		$id_jabatan		= 2;
		$foto 			= "nama_foto02.jpg";
		$keterangan 	= "Staff";

		$stt->execute();
		echo $stt->rowCount()." Berhasil di Tambahkan";
		$dbh = NULL;
	} catch (Exception $e) {
		die("Kodeksi/Query Bermasalah ".$e->getMessage());
	}
?>