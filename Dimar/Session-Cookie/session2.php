<?php

    session_start();

    if(isset($_SESSION['login'])){

        //jika sudah login
        //menampilkan isi session
        echo "<h1>Selamat Datang".$_SESSION['login']."</h1>";
        echo "<h2>Halaman Saat ini hanya bisa diakses jika anda sudah login</h2>";
        echo "<h2>Klik <a href='session3.php'>di sini (session03.php)</a> untuk LOGOUT </h2>";
    }else{
        //session belum ada artinya belum login
        die("Anda belum login! Anda tidak berhak masuk ke halaman ini. Login lagi <a href='session01.php'>di sini</a>");
    }

?>