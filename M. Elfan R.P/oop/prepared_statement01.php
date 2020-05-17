<?php
	try {
		$db = new PDO('mysql:host=localhost;dbname=db_oop', 'root', '');

		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$res = $db->prepare("INSERT INTO tbl_pegawai VALUES (?,?,?,?,?,?,?)");

		$res->bindParam(1, $id_pegawai);
		$res->bindParam(2, $nama_pegawai);
		$res->bindParam(3, $jk);
		$res->bindParam(4, $tgl_lahir);
		$res->bindParam(5, $id_jabatan);
		$res->bindParam(6, $foto);
		$res->bindParam(7, $keterangan);

		$id_pegawai = NULL;
		$nama_pegawai = 'Elfan';
		$jk = 'L';
		$tgl_lahir 	= '1999-09-09';
		$id_jabatan = 1;
		$foto = 'elfan.jpg';
		$keterangan = 'Direktur Utama';

		$res->execute();

		echo $res->rowCount(). " Berhasil ditambahkan";
		$db = null;
	} catch (PDOException $e) {
		die("Query / Koneksi Gagal ". $e->getMessage());
	}

?>