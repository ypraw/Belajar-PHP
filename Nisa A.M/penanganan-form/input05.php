<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Text</title>
</head>
<body>
    <form action="" method="post" name="input">
    Sahabat-sahabat Dekatku <br><br>
    <input type="text" name="name1" /><br><br>
    <input type="text" name="name2" /><br><br>
    <input type="text" name="name3" /><br><br>
    <input type="text" name="name4" /><br><br>
    <input type="submit" value="input" name="input" /><br><br>
    </form>

    <?php
    if(isset($_POST['input'])){
        $nama1 = $_POST['name1'];
        $nama2 = $_POST['name2'];
        $nama3 = $_POST['name3'];
        $nama4 = $_POST['name4'];
        echo "<b>Nama Sahabat-sahabat dekatku : </b></br>";
        echo "$nama1<br/>";
        echo "$nama2<br/>";
        echo "$nama3<br/>";
        echo "$nama4<br/>";
    }
    ?>
</body>
</html>