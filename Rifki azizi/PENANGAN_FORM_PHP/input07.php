<!DOCTYPE html>
<html>
<head>
    <title>Pilih jurusan</title>
    <style>
    .error{
        color:#ff0000;
    }
    </style>
</head>
<body>
    <?php
        $jurusanErr="";
        $jurusan="";

        if ($_SERVER["REQUEST_METHOD"]=="POST"){
            if (empty($_POST["jurusan"])){
                $jurusanErr = "Jurusan is required";
            } else{
                $jurusan=($_POST["jurusan"]);
            }
        }
        ?>
    <form action=""method="post" name="input">
    <h2>Pilih jurusan anda</h2>
    <input type="radio" name="jurusan"
    <?php if (isset($jurusan) && $jurusan =="TI") echo "cheked"; ?>
        value="TI">Teknik informatika
        <input type="radio" name="jurusan"
    <?php if (isset($jurusan) && $jurusan =="SI") echo "cheked"; ?>
        value="TI">Sistem informasi
        <input type="radio" name="jurusan"
    <?php if (isset($jurusan) && $jurusan =="SK") echo "cheked"; ?>
        value="TI">Sistem Komputer<input type="radio" name="jurusan"
    <?php if (isset($jurusan) && $jurusan =="KA") echo "cheked"; ?>
        value="TI">Komputerisasi Akuntansi
    
    <span class="error">* <?php echo $jurusanErr; ?></span><br><br>
    <input type="submit" name="pilih" value="pilih jurusan">
    </form>

    <?php
    if (isset($_POST["pilih"])){
        
        if(empty($_POST['jurusan'])){
        $jurusanErr = "jurusan is required";
        echo "jurusan anda adalah : <b><font color='red'> $jurusanErr</font></b>";
    } else{
        $jurusan =($_POST["jurusan"]);
        echo "jurusan anda adalah : <b><font color='red'> $jurusan</font><b/>";
    }
}
    ?>
</body>
</html>