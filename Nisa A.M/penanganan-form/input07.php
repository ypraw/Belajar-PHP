<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pilih Jurusan</title>
    <style>
    .error{
        color:#FF0000;
    }
    </style>
</head>
<body>
    <?php
    $jrsnErr = "";
    $jrsn = "";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(empty($_POST["jrsn"])){
            $jrsnErr = "Jurusan is required";
        }else{
            $jrsn = $_POST["jrsn"];
        }
    }
    ?>

    <form action="" method="post" name="input">
    <h2>Pilih Jurusan</h2>
        <input type="radio" name="jrsn"
        <?php if(isset($jrsn) && $jrsn == "TI")echo "checked";  ?>
        value = "TI">Teknik Informatika
        <input type="radio" name="jrsn"
        <?php if(isset($jrsn) && $jrsn == "SI") echo "checked";  ?>
        value = "SI">Sistem Informasi
        <input type="radio" name="jrsn"
        <?php if(isset($jrsn) && $jrsn == "SK") echo "checked";  ?>
        value = "SK">Sistem Komputer
        <input type="radio" name="jrsn"
        <?php if(isset($jrsn) && $jrsn == "KA") echo "checked";  ?>
        value = "KA">Komputerisasi Akuntansi

        <span class="error">* <?= $jrsnErr; ?></span><br><br>
        <input type="submit" name="pilih" value="Pilih Jurusan">
    </form>

    <?php
    if(isset($_POST['pilih'])){
        if(empty($_POST["jrsn"])){
        $jrsnErr = "Jurusan is required";
        echo "Jurusan anda adalah : <b><font color='red'>$jrsnErr</font></b>";
    }else{
        $jrsn = ($_POST["jrsn"]);
        echo "Jurusan anda adalah : <b><font color='red'>$jrsn</font></b>";
    }
}
    ?>
</body>
</html>