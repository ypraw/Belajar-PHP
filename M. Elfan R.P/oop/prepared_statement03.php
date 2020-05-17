<?php
	try {
		$db = new PDO('mysql:host=localhost;dbname=db_oop', 'root', '');

		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$res = $db->prepare("INSERT INTO tbl_pegawai VALUES (:id_pegawai,:nama_pegawai,:jk,:tgl_lahir,:id_jabatan,:foto,:keterangan)");
		
		$id_pegawai = NULL;
		$nama_pegawai = 'Elfan';
		$jk = 'L';
		$tgl_lahir 	= '1999-09-09';
		$id_jabatan = 1;
		$foto = 'elfan.jpg';
		$keterangan = 'Direktur Utama';

		$res->execute(
			array(
				':id_pegawai' => $id_pegawai,
				':nama_pegawai' => $nama_pegawai,
				':jk' => $jk,
				':tgl_lahir' => $tgl_lahir,
				':id_jabatan' => $id_jabatan,
				':foto' => $foto,
				':keterangan' => $keterangan
			)
		);

		echo $res->rowCount(). " Berhasil ditambahkan";
		$db = null;
	} catch (PDOException $e) {
		die("Query / Koneksi Gagal ". $e->getMessage());
	}

?>