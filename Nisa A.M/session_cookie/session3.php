<?php
session_start();
if(isset($_SESSION['login'])){
    unset($_SESSION); //menghapus var
    session_destroy(); //menghapus session

    echo "<h1>Anda berhasil LOGOUT<h1>";
    echo "<h2>Klik <a href='session1.php'> disini</a>
        untuk LOGIN kembali</h2>";
    echo "<h2>Anda sekarang tidak bisa masuk ke halaman <a href='session2.php'> Lagi</a></h2>";
}
?>