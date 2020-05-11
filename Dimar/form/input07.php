<!DOCTYPE html>
<html>

<head>
    <title>Pilih Jurusan</title>
    <style>
        .error {
            color: #FF0000;
        }
    </style>
</head>

<body>
    <?php
    // mendefinisikan variables dengan values kosong
    $jurusanErr = "";
    $jurusan = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["jurusan"])) {
            $jurusanErr = "Jurusan is required";
        } else {
            $jurusan = ($_POST["jurusan"]);
        }
    }
    ?>
    <form action="" method="post" name="input">
        <h2>Pilih Jurusan Anda</h2>
        <input type="radio" name="jurusan" <?php if (isset($jurusan) && $jurusan == "TI") echo "checked"; ?> value="TI">Teknik Informatika
        <input type="radio" name="jurusan" <?php if (isset($jurusan) && $jurusan == "SI") echo "checked"; ?> value="SI">Sistem Informasi
        <input type="radio" name="jurusan" <?php if (isset($jurusan) && $jurusan == "SK") echo "checked"; ?> value="SK">Sistem Komputer
        <input type="radio" name="jurusan" <?php if (isset($jurusan) && $jurusan == "KA") echo "checked"; ?> value="KA">Komputerisasi Akuntansi
        <span class="error">* <?php echo $jurusanErr; ?></span><br><br>
        <input type="submit" name="pilih" value="Pilih Jurusan">
    </form>
    <?php
    if (isset($_POST['pilih'])) {
        if (empty($_POST["jurusan"])) {
            $jurusanErr = "Jurusan is required";
            echo "Jurusan Anda adalah : <b><font color='red'> $jurusanErr</font></b>";
        } else {
            $jurusan = ($_POST["jurusan"]);
            echo "Jurusan Anda adalah : <b><font color='red'> $jurusan</font></b>";
        }
    }
    ?>
</body>

</html>