<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input dengan validasi</title>
    <style>
        .error{
            color:#FF0000;
        }
    </style>
</head>
<body>
    <?php
    //definisi var dengan val kosong//
        $nameErr = $emailErr = "";
        $name = $email = "";

        if($_SERVER["REQUEST_METHOD"] == "POST"){
            if(empty($_POST["name"])){
                $nameErr = "Name is required";
            }else{
                $name  = ($_POST["name"]);
                if(!preg_match("/^[a-zA-Z ]*$/", $name)){
                    $nameErr = "Only letters and white space allowed";
                }
            }

            if(empty($_POST["email"])){
                $emailErr = "Email is required";
            }else{
                $email = ($_POST["email"]);
                //cek jika email ada//
                if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                    $emailErr = "Invalid email format";
                }
            }
        }

        ?>

        <h2>PHP FORM Dengan Validation</h2>
        <p><span class="error">* required field.</span></p>
        <form action="" name="input" method="post">
        Name : <input type="text" name="name">
        <span class="error">* <?= $nameErr ?></span>
        <br><br>
        E-mail : <input type="text" name="email">
        <span class="error">* <?= $emailErr ?></span>
        <br><br>
        <input type="submit" name="input" value="input">
        </form>
</body>
</html>

<?php
if(isset($_POST['input'])){
    if(empty($_POST["name"])) {
        $name = " Silahkan masukan nama anda !!!";
    }else{
        $name = ($_POST["name"]);
        if(!preg_match("/^[a-zA-Z ]*$/", $name)){
        $name = "Only letters and white space allowed";
        }
    }

    if(empty($_POST["email"])) {
        $email = " Silahkan masukan email anda !!!";
    }else{
        $email = ($_POST["email"]);
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $email = "Invalid email format";
        }
    }

    echo "Nama anda : <b>$name</b><br/><br/>";
    echo "E-mail anda : <b>$email</b>";

}