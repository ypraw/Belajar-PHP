<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inputan Checkbox</title>
</head>
<body>
    <form action="" method="post" name="input">
    <h2>Pilih Pembalap Favorit </h2>
    <input type="checkbox" name="blp1" value="Valentino Rosi" checked/>Valentino Rosi<br>
    <input type="checkbox" name="blp2" value="Marc Marques" checked/>MarcMarques<br>
    <input type="checkbox" name="blp3" value="Jorge Lorenzo" checked/>Jorge Lorenzo<br>
    <input type="checkbox" name="blp4" value="Dovisioso" checked/>Dovisioso<br>
    <input type="submit" name="pilih" value="pilih">
    </form>

    <?php
    if(isset($_POST['pilih'])){
        echo "Pembalap Favorit anda adalah : <br/>";
        if(isset($_POST['blp1'])){
            echo "+". $_POST['blp1'].  "<br/>";
        }
        if(isset($_POST['blp2'])){
            echo "+". $_POST['blp2'].  "<br/>";
        }
        if(isset($_POST['blp3'])){
            echo "+". $_POST['blp3'].  "<br/>";
        }
        if(isset($_POST['blp4'])){
            echo "+". $_POST['blp4'].  "<br/>";
        }
    }
    ?>
</body>
</html>