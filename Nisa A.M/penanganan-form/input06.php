<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Here</title>
    <style>
        .error{
            color:#FF0000;
        }
    </style>
</head>
<body>
    <?php
    $emailErr = $pwErr = "";
    $email = $pw = "";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(empty($_POST["email"])){
            $emailErr = "Email is required";
        }else{
            $email = $_POST["email"];
            if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
                $emailErr = "Invalid email format";
            }
        }

        if(empty($_POST["pw"])){
            $pwErr = "Password is required";
        }else{
            $pw = trim($_POST["pw"]);
            if(!is_numeric($pw) == true){
                $pwErr = "Only number allowed";
            }
        }
    }

    ?>

    <form action="" method="post" name="input">
    <h2>Login Here</h2>
    E-mail : <input type="text" name="email">
    <span class="error">* <?= $emailErr ?></span><br><br>
    Password : <input type="password" name="pw">
    <span class="error">* <?= $pwErr ?></span><br><br>
    <input type="submit" name="login" value="login">
    <input type="reset" name="reset" value="reset">
    </form>

    <?php 
    if(isset($_POST['login'])){
        $email = $_POST['email'];
        $pw =trim($_POST['pw']);
        if($email == "nisaagustiina@gmail.com" && $pw == "123"){
            echo "<h2>Login Success!</h2>";
        }else{
            echo "<h2>Login Fail</h2>";
        }
    }
    ?>
</body>
</html>