<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Combobox</title>
</head>
<body>
    <form action="" method="post" name="input">
    <h2>Pilih Makanan Favorit</h2>
    <select name="jjn">
    <option value="">--Pilih Makanan--</option>
    <option value="bakso">Bakso</option>
    <option value="nasgor">Nasgor</option>
    <option value="eskrim">Es Krim</option>
    <option value="burger">Burger</option>
    </select>
    <input type="submit" name="pilih" value="pilih">
    </form>

    <?php
    if(isset($_POST['pilih'])){
        $jjn  = $_POST['jjn'];
        echo "Jurusan anda adalah : <b><font color='blue'>$jjn</font></b>";
    }
    ?>
</body>
</html>