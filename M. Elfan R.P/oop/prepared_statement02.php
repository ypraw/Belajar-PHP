<?php
	try {
		$db = new PDO('mysql:host=localhost;dbname=db_oop', 'root', '');

		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$res = $db->prepare("INSERT INTO tbl_pegawai VALUES (:id_pegawai,:nama_pegawai,:jk,:tgl_lahir,:id_jabatan,:foto,:keterangan)");

		$res->bindParam(':id_pegawai', $id_pegawai);
		$res->bindParam(':nama_pegawai', $nama_pegawai);
		$res->bindParam(':jk', $jk);
		$res->bindParam(':tgl_lahir', $tgl_lahir);
		$res->bindParam(':id_jabatan', $id_jabatan);
		$res->bindParam(':foto', $foto);
		$res->bindParam(':keterangan', $keterangan);

		$id_pegawai = NULL;
		$nama_pegawai = 'Rodhian';
		$jk = 'L';
		$tgl_lahir 	= '1997-09-09';
		$id_jabatan = 1;
		$foto = 'rodhian.jpg';
		$keterangan = 'Direktur Utama';

		$res->execute();

		echo $res->rowCount(). " Berhasil ditambahkan";
		$db = null;
	} catch (PDOException $e) {
		die("Query / Koneksi Gagal ". $e->getMessage());
	}

?>