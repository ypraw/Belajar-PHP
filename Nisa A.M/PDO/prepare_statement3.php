<?php
try{
    $con = new PDO("mysql:host=localhost;dbname=db_oop", "root", "");

    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $st = $con->prepare("INSERT INTO tbl_pegawai VALUES (:id_pegawai, :nama_pegawai,
                         :jk, :tgl_lahir, :id_jbtn, :foto, :ket)");

    $id_pegawai = '2';
    $nama_pegawai = 'Raska';
    $jk = 'L';
    $tgl_lahir = '1999-11-11';
    $id_jbtn = 2;
    $foto = "Raska.jpg";
    $ket = "Direktur";

    $st->execute(array(
    ':id_pegawai' => $id_pegawai,
    ':nama_pegawai' => $nama_pegawai,
    ':jk' => $jk,
    ':tgl_lahir' => $tgl_lahir,
    ':id_jbtn'=> $id_jbtn,
    ':foto' => $foto,
    ':ket' => $ket,
    ));

    echo $st->rowCount()." Berhasil ditambahkan";

    $con = null;
}
catch(PDOException $error){
    die("Koneksi gagal : ".$error->getMessage());
}