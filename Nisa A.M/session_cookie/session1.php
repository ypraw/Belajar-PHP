<?php
session_start();
if(isset($_POST['login'])){
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    //cek login
    if($user == "Nisa" && $pass == "228"){
        //buat session
        $_SESSION['login'] = $user;
        //ke hlm cek login
        echo "<h1>Anda berhasil LOGIN</h1>";
        echo "<h2>Klik <a href='session2.php'> disini (session2.php)</a>
        untuk menuju halaman pemeriksaan session </h2>";
    }
}else{
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login here..</title>
</head>
<body>
    <form action="" method="post">
    <h2>Login here</h2>
    Username : <input type="text" name="user"/><br/>
    Password : <input type="password" name="pass"/><br/>
    <input type="submit" name="login" value="Login">
    </form>
</body>
</html>
<?php }
?>


<!-- Proses Penyimpanan session agar berjalan :
- PHP meng-generate (membentuk) sebuah ID session.
• ID session ini merupakan sejumlah deret angka random yang unik untuk setiap user dan
hampir tidak mungkin bisa ditebak. ID session disimpan oleh PHP di dalam variabel sistem
PHP dengan nama PHPSESSID
• PHP menyimpan nilai yang akan Anda simpan dalam session di dalam file
yang berada di server.
• Nama file tempat penyimpanan session tersebut sesuai (sama) dengan ID session. File
disimpan dalam suatu direktori yang ditunjukkan oleh session.save_path dalam file konfigurasi php.ini.
• PHP melempar ID session ke setiap halaman.
• PHP mengambil nilai session dari file session untuk setiap halaman session. 

-->