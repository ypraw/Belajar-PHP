<!DOCTYPE html>
<html>
<head>
    <title>Pengolahan Form ~ text </title>
</head>
<body>
    <form action ="" method="post" name="input">
    sahabat-sahabat dekatku  <br>
    <input type="text" name="nama1" /><br><br>
    <input type="text" name="nama2" /><br><br>
    <input type="text" name="nama3" /><br><br>
    <input type="text" name="nama4" /><br><br>
    <input type="submit" name="input" value="input">
</form>
<?php
if (isset($_POST['input'])) {
    $nama=$_POST['nama1'];
    $nama2=$_POST['nama2'];
    $nama3=$_POST['nama3'];
    $nama4=$_POST['nama4'];
    echo "<b> Nama sahabat-sahabat dekatku : </b></br>";
    echo "$nama<br/>";
    echo "$nama2<br/>";
    echo "$nama3<br/>";
    echo "$nama4<br/>";
}
?>
</body> 
</html>