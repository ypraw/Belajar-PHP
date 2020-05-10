<!DOCTYPE html>
<html >
<head>
    <title>Makanan favorit ~  inputan checkbox</title>
</head>
<body>
    <form action="" method="post" name="input">
    <h2>Pilih makanan favorit anda</h2>
    <select name="jajanan">
        <option  value=""> Pilih makanan </option>
        <option value="bakso">bakso</option>
        <option value="mieayam">mieayam</option>
        <option value="cilok">cilok</option>
        <option value="cilok">cilok</option>
        </select>
        <input type="submit" name="pilih" value="pilih">
        </form>
        <?php
        if (isset($_POST['pilih'])){
            $jajanan = $_POST['jajanan'];
            echo "Makanan favorit anda adalah : <font color=blue><b>$jajanan</b></font>";
        }
        ?>
</body>
</html>