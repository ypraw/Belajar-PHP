<?php
try{
    $con = new PDO("mysql:host=localhost;dbname=db_oop", "root", "");

    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $result = $con->query("INSERT INTO tbl_jbtn VALUES (NULL,'Direktur')");
    echo $result->rowCount()." Berhasil ditambahkan ke tabel jabatan.";
    $con = null;
}
catch(PDOException $error){
    die("Koneksi gagal : ".$error->getMessage());
}