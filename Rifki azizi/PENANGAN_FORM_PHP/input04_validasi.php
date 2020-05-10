<!DOCTYPE html>
<html >
<head>
    <style>
    .error{
        color:#ff0000;
    }  
    </style>
</head>
<body>
    <?php
    //mendefinisikan variabel dengan value kosong
    $nameErr = $emailErr = "";
    $name = $email ="";

    if ($_SERVER["REQUEST_METHOD"]=="POST") {
        if (empty($_POST["name"])){
            $nameErr = "Name is required";
        } else {
            $name= ($_POST["name"]);
            if (!preg_match("/^[a-zA-Z ]*$/", $name)){
                $nameErr = "Only latter and white space allowed";
            }
    }

    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = ($_POST["email"]);
       //check if email addres is well-formed
       if (!filter_var($email, FILTER_VALIDATE_EMAIL))  {
           $emailErr = "invalid  email format";
       }
    }
}
?>
    <h2> PHP Form dengan validation</h2>
    <p> <span class="error">* required field.</span></p>
    <form method="post" acttion ="" name="input">
        name: <input type="text" name="name">
        <span class="error">* <?php echo $nameErr;?></span>
        <br><br>
        email: <input type="text" name="email">
        <span class="error">* <?php echo  $emailErr; ?></span>
        <br><br>

        <input type="submit" name="input" value="input">
       </form> 
</body>
</html>
<?php
if (isset($_POST['input'])){
if (empty($_POST['name'])){
    $_name = "silahkan masukan nama anda !!!!!!!!!!!!!!";
} else {
    $name = ($_POST["name"]);
    if (!preg_match("/^[a-zA-Z]*$/", $name)) {
        $name = "Only letters and white space allowed";
}
}

if (empty($_POST["email"])) {
    $email = "Silahkan masukan email anda!!!!!!!!!!";
} else {
    $email=($_POST["email"]);
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $email="Invalid email format";

    }
}
echo "Nama anda : <b>$name</b> <br/><br/>";
echo "Email anda : <b>$email</b>";
}

?>