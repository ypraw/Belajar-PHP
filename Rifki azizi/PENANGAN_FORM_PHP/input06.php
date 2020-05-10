<!DOCTYPE html>
<html>
<head>
    <title>Login here</title>
    <style>
    .error {
        color: #ff0000;
    }
    </style>
</head>
<body>
    <?php
    //mendefinisikan variabel
    $emailErr=$passwordErr = "";
    $email=$password="";

    if($_SERVER["REQUEST_METHOD"]== "POST") {
        if(empty($_POST["email"])){
            $emailErr = "Email is required";
        } else {
            $email = ($_POST["email"]);
            //check if email
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $emailErr = "Invalid email format";
            }
        }
        if (empty($_POST["PASSWORD"])){
            if (! is_numeric($password) == TRUE){

            }
        }
        
    }
    ?>
    <form action="" method="post" name="input">
    <h2>Login here...</h2>
    Email : <input  type="text" name="email">
    <span class="error">* <?php echo $emailErr; ?> </span> <br><br>
    Password : <input  type="password" name="password">
    <span class="error">* <?php echo $passwordErr; ?> </span> <br><br>
    <input type="submit" name="login" value="login">
    <input type="reset" name="reset" value="reset">
</form>
<?php
if (isset($_POST['login'])){
    $email=$_POST['email'];
    $password= trim($_POST['password']);
    if ($email == "rifki@gmail.com" && $password =="123"){
        echo "<h2> Login berhasil</h2>";
    } else{
        echo "<h2>Login gagal</h2>";
    }
}
?>
</body>
</html>