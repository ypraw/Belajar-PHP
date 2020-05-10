<!DOCTYPE html>
<html>

<head>
    <title>Pengolahan form</title>
</head>
<body>
    <form action="" method="post" name="input">
        name: <input type="text" name="name"><br><br>
        E-mail: <input type="text" name="email"><br><br>
        <input type="submit" name="input" value="input"><br><br>
        </form>
</body>


</html>
<?php
if (isset($_POST['input'])) {
    $nama= $_POST['name'];
    $email= $_POST['email'];
    echo "Nama Anda : <b>$nama</b> <br/><br/>";
    echo "Email Anda : <b>$email</b> <br/><br/>";
}

?>