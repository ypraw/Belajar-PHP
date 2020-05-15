<?php
session_start();
//cek session
if(isset($_SESSION['login'])) {
    //file sudah login
    //tampil isi session
    echo "<h1>Selamat datang".$_SESSION['login']."</h1>";
    echo "<h2>Halaman ini hanya bisa diakses setelah login</h2>";
    echo "<h2>Klik <a href='session3.php'> disini (session3.php)</a>
        untuk LOGOUT </h2>";
}else{
    die("Anda belum login! Anda tidak berhak masuk ke halaman ini.
    Silahkan login <a href='session1.php'>disini</a>");
}
?>