<?php
try{
    $con = new PDO("mysql:host=localhost;dbname=db_oop", "root", "");

    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $result = $con->query("SELECT * FROM tbl_jbtn");

    while($row = $result->fetch()){
        echo "$row[id_jbtn] $row[nama_jbtn] <br>";
    }

    $con = null;
}
catch(PDOException $error){
    die("Koneksi gagal : ".$error->getMessage());
}