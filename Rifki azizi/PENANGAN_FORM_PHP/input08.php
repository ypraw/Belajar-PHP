<!DOCTYPE html>
<html>
<head>
   <title>Pembalap favorit ~ inputan checkbox</title>
</head>
<body>
    <form action="" method="post" name="input">
    <h2>Pilih pembalap favorit anda</h2>
    <input type="checkbox" name="pembalap01" value="rossi" />rossi <br><br>
    <input type="checkbox" name="pembalap02" value="mark" />mark <br><br>
    <input type="checkbox" name="pembalap03" value="lorenzo" />lorenzo <br><br>
    <input type="checkbox" name="pembalap04" value="dovi" checked/>dovi <br><br>
    <input type="submit" name="pilih" value="pilih">
    </form>
    <?php
    if(isset($_POST['pilih'])){
        echo "pembalap favorit anda adalah : <br/>";
        if(isset($_POST['pembalap01'])){
            echo "+" . $_POST['pembalap01'] . "<br/>";
        }
        if(isset($_POST['pembalap02'])){
            echo "+" . $_POST['pembalap02'] . "<br/>";
        }
        if(isset($_POST['pembalap03'])){
            echo "+" . $_POST['pembalap03'] . "<br/>";
        }
        if(isset($_POST['pembalap04'])){
            echo "+" . $_POST['pembalap04'] . "<br/>";
        }

    }
    ?>
</body>
</html>