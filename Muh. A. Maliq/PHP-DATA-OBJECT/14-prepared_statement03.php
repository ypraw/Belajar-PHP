<?php
	try {
		$dbh = new PDO("mysql:host=localhost;dbname=db_oop", "root", "");
		$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$stt = $dbh->prepare("INSERT INTO tbl_pegawai VALUES (:id_pegawai, :nama_pegawai, :jenis_kelamin, :tgl_lahir, :id_jabatan, :foto, :keterangan)");

		$id_pegawai 	= NULL;
		$nama_pegawai 	= "Muhamad Zaenal Abidin";
		$jenis_kelamin 	= "L";
		$tgl_lahir 		= "1988-08-01";
		$id_jabatan		= 1;
		$foto 			= "nama_foto03.jpg";
		$keterangan 	= "Manager Utama";

		$stt->execute(array(
			':id_pegawai'	=> $id_pegawai,
			':nama_pegawai'	=> $nama_pegawai,
			':jenis_kelamin'=> $jenis_kelamin,
			':tgl_lahir'	=> $tgl_lahir,
			':id_jabatan'	=> $id_jabatan,
			':foto'			=> $foto,
			':keterangan'	=> $keterangan
		));
		echo $stt->rowCount()." Berhasil di Tambahkan";
		$dbh = NULL;
	} catch (Exception $e) {
		die("Kodeksi/Query Bermasalah ".$e->getMessage());
	}
?>