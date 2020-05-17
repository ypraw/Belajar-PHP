<?php
try{
    $con = new PDO("mysql:host=localhost;dbname=db_oop", "root", "");

    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $result = $con->query("UPDATE tbl_jbtn SET nama_jbtn='Direktur Utama' WHERE id_jbtn=1");

        echo $result->rowCount()." Berhasil  diupdate";

    $con = null;
}
catch(PDOException $error){
    die("Koneksi gagal : ".$error->getMessage());
}