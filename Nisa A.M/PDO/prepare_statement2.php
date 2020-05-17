<?php
try{
    $con = new PDO("mysql:host=localhost;dbname=db_oop", "root", "");

    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $st = $con->prepare("INSERT INTO tbl_pegawai VALUES (:id_pegawai, :nama_pegawai,
                         :jk, :tgl_lahir, :id_jbtn, :foto, :ket)");

    $st->bindParam(':id_pegawai', $id_pegawai);
    $st->bindParam(':nama_pegawai', $nama_pegawai);
    $st->bindParam(':jk', $jk);
    $st->bindParam(':tgl_lahir', $tgl_lahir);
    $st->bindParam(':id_jbtn', $id_jbtn);
    $st->bindParam(':foto', $foto);
    $st->bindParam(':ket', $ket);

    $id_pegawai = '1';
    $nama_pegawai = 'Reffan';
    $jk = 'L';
    $tgl_lahir = '2015-09-03';
    $id_jbtn = 1;
    $foto = "Reffan.jpg";
    $ket = "Direktur";

    $st->execute();
    echo $st->rowCount()." Berhasil ditambahkan";

    $con = null;
}
catch(PDOException $error){
    die("Koneksi gagal : ".$error->getMessage());
}