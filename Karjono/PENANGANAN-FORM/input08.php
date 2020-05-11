<!DOCTYPE html>
<html>

<head>
    <title>Pembalap Favorit ~ Inputan Checkbox</title>
</head>

<body>
    <form action="" method="post" name="input">
        <h2>Pilih Pembalap Favorit Anda :</h2>
        <input type="checkbox" name="pembalap01" value="Valentino Rosi" checked />Valentino Rosi <br><br>
        <input type="checkbox" name="pembalap02" value="Marc Marques" />Marc Marques <br><br>
        <input type="checkbox" name="pembalap03" value="Jorge Lorenso" />Jorge Lorenso <br><br>
        <input type="checkbox" name="pembalap04" value="Dovisioso" />Dovisioso <br><br>
        <input type="submit" name="pilih" value="pilih">
    </form>
    <?php
    if (isset($_POST['pilih'])) {
        echo "Pembalap favorit anda adalah : <br/> ";
        if (isset($_POST['pembalap01'])) {
            echo "+" . $_POST['pembalap01'] . "<br/>";
        }
        if (isset($_POST['pembalap02'])) {
            echo "+" . $_POST['pembalap02'] . "<br/>";
        }
        if (isset($_POST['pembalap03'])) {
            echo "+" . $_POST['pembalap03'] . "<br/>";
        }
        if (isset($_POST['pembalap04'])) {
            echo "+" . $_POST['pembalap04'] . "<br/>";
        }
    }
    ?>
</body>

</html>
