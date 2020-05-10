<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kritik dan saran inputan ~ textarea</title>
</head>
<body>
    <form action="" method="post" name="input">
    <h2>Kritik / saran</h2>
    <textarea name="saran" id="" cols="100" rows="15">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque fuga tenetur rem, ullam inventore ratione error exercitationem! Nulla modi quod in et quae saepe fugiat ipsa, accusamus, odio ullam iusto.</textarea><br/>
    <input type="submit" name="proses" value="Input saran"/>
    </form>




    <?php
    if (isset($_POST['proses'])){
        $saran = nl2br($_POST['saran']);
        echo "Kritik / saran anda adalah : <br>";
        echo "<font color:blue><b>$saran</b></font><br/>";
    }
    ?>
</body>
</html>