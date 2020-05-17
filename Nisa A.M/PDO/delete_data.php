<?php
try{
    $con = new PDO("mysql:host=localhost;dbname=db_oop", "root", "");

    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $result = $con->query("DELETE FROM tbl_jbtn WHERE id_jbtn=3");

        echo $result->rowCount()." Berhasil dihapus";

    $con = null;
}
catch(PDOException $error){
    die("Koneksi gagal : ".$error->getMessage());
}