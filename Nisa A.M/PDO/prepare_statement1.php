<?php
try{
    $con = new PDO("mysql:host=localhost;dbname=db_oop", "root", "");

    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $st = $con->prepare("INSERT INTO tbl_pegawai VALUES (?,?,?,?,?,?,?)");

    $st->bindParam(1, $id_pegawai);
    $st->bindParam(2, $nama_pegawai);
    $st->bindParam(3, $jk);
    $st->bindParam(4, $tgl_lahir);
    $st->bindParam(5, $id_jbtn);
    $st->bindParam(6, $foto);
    $st->bindParam(7, $ket);

    $id_pegawai = 'NULL';
    $nama_pegawai = 'Nisa';
    $jk = 'P';
    $tgl_lahir = '2002-08-22';
    $id_jbtn = 1;
    $foto = "Nisa.jpg";
    $ket = "Direktur Utama";

    $st->execute();
    echo $st->rowCount()." Berhasil ditambahkan";

    $con = null;
}
catch(PDOException $error){
    die("Koneksi gagal : ".$error->getMessage());
}