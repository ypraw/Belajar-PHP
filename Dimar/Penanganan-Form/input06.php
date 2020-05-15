<!DOCTYPE html>
<html>

<head>
    <title>Login Here</title>
    <style>
        .error {
            color: #FF0000;
        }
    </style>
</head>

<body>
    <?php
    // mendefinisikan variables dengan values kosong
    $emailErr = $passwordErr = "";
    $email = $password = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["email"])) {
            $emailErr = "Email is required";
        } else {
            $email = ($_POST["email"]);
            // check if e-mail address is well-formed
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Invalid email format";
            }
        }
        if (empty($_POST["password"])) {
            $passwordErr = "Password is required";
        } else {
            $password = trim($_POST["password"]);
            if (!is_numeric($password) == TRUE) {
                $passwordErr = "Only Number allowed";
            }
        }
    }
    ?>
    <form action="" method="post" name="input">
        <h2>Login Here...</h2>
        E-mail : <input type="text" name="email">
        <span class="error">* <?php echo $emailErr; ?></span><br><br>
        Password : <input type="password" name="password">
        <span class="error">* <?php echo $passwordErr; ?></span><br><br>
        <input type="submit" name="login" value="login">
        <input type="reset" name="reset" value="reset">
    </form>
    <?php
    if (isset($_POST['login'])) {
        $email = $_POST['email'];
        $password = trim($_POST['password']);
        if ($email == "dimarhanung@gmail.com" && $password == "123") {
            echo "<h2>Login Berhasil</h2>";
        } else {
            echo "<h2>Login Gagal</h2>";
        }
    }
    ?>
</body>

</html>