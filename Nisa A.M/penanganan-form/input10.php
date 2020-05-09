<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Textarea</title>
</head>
<body>
    <form action="" method="post" name="input">
    <h2>Kritik dan Saran</h2>
    <textarea name="saran" id="" cols="100" rows="15"></textarea><br/>
    <input type="submit"  name="proses" value="input saran">
    </form>

    
    <?php
    if(isset($_POST['proses'])){
        $saran = nl2br($_POST['saran']);
        echo "Kritik/Saran anda adalah :  <br>";
        echo "<font color='blue'>$saran</font><br/>";
    }
    ?>
</body>
</html>