<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Biodata</title>
    <style>
        .error{
            color:#FF0000;
        }
    </style>
</head>
<body>
    <?php
        $nameErr = $emailErr = $noErr = "";
        $name = $email = $no = "";
        $jkErr = "";
        $jk = "";

        if($_SERVER["REQUEST_METHOD"] == "POST"){
            if(empty($_POST["name"])){
                $nameErr = "Name is required";
            }else{
                $name = ($_POST["name"]);
                if(!preg_match("/^[a-zA-Z]*$/", $name)){
                    $nameErr = "Only letters and white space allowed";
                }
            }

            if(empty($_POST["email"])){
                $emailErr = "Email is required";
            }else{
                $email = ($_POST["email"]);
                if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                    $emailErr =  "Invalid email Format";
                }
            }

            if(empty($_POST["no"])){
                $noErr = "Nomor is required";
            }else{
                $no = trim($_POST["no"]);
                if(!is_numeric($no) == true){
                    $noErr = "Only number allowed";
                }
            }

            if(empty($_POST["jk"])){
                $jkErr = "Jenis Kelamin is required";
            }else{
                $jk = $_POST["jk"];
            }
        }
    ?>

    <table width="600px" border="1" cellspacing="0" cellpadding="8">
    <tr>
        <td><h3 align="center">FORM BIODATA DIRI</h3></td>
    </tr>
    <tr>
        <td height="650">
            <form action="" method="post" name="submit">
                <p>Nama  : <input type="text" name="name">
                <span class="error">* <?= $nameErr; ?></span></p>
                <p>TTL : <input type="date" name="ttl"></p>
                <p>Jenis Kelamin : <span class="error">* <?= $jkErr?></span></p>
                    <input type="radio" name="jk" value="perempuan" <?php if(isset($jk) && $jk == "Perempuan");?>>Perempuan
                    <input type="radio" name="jk" value="laki" <?php if(isset($jk) && $jk == "Laki-Laki");?>>Laki-Laki
                <p>Agama : </p>
                    <select name="agama" id="">
                        <option value="islam">Islam</option>
                        <option value="kristen">Kristen</option>
                        <option value="hindu">Hindu</option>
                        <option value="budha">Budha</option>
                        <option value="lainnya">Lainnya</option>
                    </select>
                <p>Alamat : <input type="text" name="alamat"></p>
                <p>No.HP : <input type="text" name="no" placeholder="+62"><span class="error"> * <?= $noErr; ?></span></p></p>
                <p>E-mail : <input type="text" name="email">
                <span class="error">* <?= $emailErr; ?></span></p>
                <p>Hobi : </p>
                    <input type="checkbox" name="h1" value="membaca" >Membaca
                    <input type="checkbox" name="h2" value="olahraga" >Olahraga
                    <input type="checkbox" name="h3" value="menyanyi" >Menyanyi
                    <input type="checkbox" name="h4" value="hiking" >Hiking
                    <input type="checkbox"name="h5" value="lainnya" >Lainnya
                <p>Deskripsi diri</p>
                <textarea name="des" id="" cols="30" rows="10"></textarea><br/><br/>
                <input type="submit" name="submit" value="submit">
                <input type="reset" name="reset" value="reset">
                </form>
            </td>
        </tr>
    </table>
</body>
</html>

<?php
    if(isset($_POST['submit'])){
        echo "Form Biodata<br/><br/>";
        if(empty($_POST["name"])) {
            $name = " Silahkan masukan nama anda !!";
        }else{
            $name = ($_POST["name"]);
            if(!preg_match("/^[a-zA-Z ]*$/", $name)){
            $name = "Only letters and white space allowed";
            }
        }
        echo "Nama : $name<br/><br/>";

        $ttl = $_POST["ttl"];
        echo "TTL : $ttl<br/><br/>";

        if(empty($_POST["jk"])){
            $jk = "Jk is required";
        }else{
            $jk = ($_POST["jk"]);
        }
        echo "Jenis Kelamin : $jk<br/><br/>";

        $agama = $_POST["agama"];
        echo "Agama : $agama <br/><br/>"; 

        $alamat = $_POST["alamat"];
        echo "Alamat : $alamat <br/><br/>";  

        if(empty($_POST["no"])){
            $no = "Nomor is required";
        }else{
            $no = trim($_POST["no"]);
            if(!is_numeric($no) == true){
                $no = "Only number allowed";
            }
        }
        echo "No. HP : $no <br/><br/>";

        if(empty($_POST["email"])){
            $email = "Silahkan masukan email anda!!";
        }else{
            $email = ($_POST["email"]);
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $email =  "Invalid email Format";
            }
        }
        echo "E-mail : $email<br/><br/>";

        echo "Hobi  : <br/>"; 
            if(isset($_POST['h1'])){
                echo $_POST['h1']. ", ";
            }
            if(isset($_POST['h2'])){
                echo $_POST['h2']." , ";
            }
            if(isset($_POST['h3'])){
                echo $_POST['h3'].  ",";
            }
            if(isset($_POST['h4'])){
                echo $_POST['h4'].  ",";
            }
            if(isset($_POST['h5'])){
                echo $_POST['h5'].  ",";
            }
        
        $des = nl2br($_POST['des']);
        echo "<br/><br/>Deskripsi diri : $des";

    }
?>