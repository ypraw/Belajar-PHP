<?php
    if(isset($_POST['submit'])){
        if(empty($_POST["name"])) {
            $name = " Silahkan masukan nama anda !!";
        }else{
            $name = ($_POST['name']);
            if(!preg_match("/^[a-zA-Z]*$/", $name)){
            $nameErr = "Only letters and white space allowed";
            }
        }

        if(empty($_POST["email"])){
            $email = "Silahkan masukan email anda!!";
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
        }

        if(empty($_POST["jk"])){
            $jkErr = "Jenis Kelamin is required";
        }else{
            $jk = ($_POST["jk"]);
        }

        echo "Nama : $name <br/><br/>"; 
        $ttl = $_POST["ttl"];
        echo "TTL : $ttl <br/><br/>"; 
        echo "Jenis Kelamin : $jk <br/><br/>"; 
        $agama = $_POST["agama"];
        echo "Agama : $agama <br/><br/>"; 
        $alamat = $_POST["alamat"];
        echo "Alamat : $alamat <br/><br/>";  
        echo "No. HP : $no <br/><br/>"; 
        echo "Email : $email <br/><br/>"; 
        echo "Hobi  : "; 
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
        echo "Deskripsi diri : $des";

    }
?>