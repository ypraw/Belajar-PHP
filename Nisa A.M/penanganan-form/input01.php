<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengolahan Form</title>
</head>
<body>
    <form action="" method="post" name="input">
    Nama : <input type="text" name="name"><br><br>
    E-mail : <input type="text" name="email"><br><br>
    <input type="submit" value="input" name="input"><br><br>
    </form>
</body>
</html>

<?php
if(isset($_POST['input'])){
    $nama = $_POST['name'];
    $email = $_POST['email'];
    echo "Nama anda : <b>$nama</b><br/><br/>";
    echo "E-mail anda : <b>$email</b>";
}