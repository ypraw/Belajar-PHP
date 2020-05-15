<?php
setcookie("username", "", time()-3600);
setcookie("namalengkap", "", time()-3600);
echo "<h1>Cookie berhasil dihapus.</h1>";

echo "<h2>Klik <a href='cookie1.php'>disini</a>Untuk membuat cookie</h2>";
echo "<h2>Klik <a href='cookie2.php'>disini</a>Untuk memeriksa cookie</h2>";
?>