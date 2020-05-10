<?php
if(isset($_POST['input'])){
    $nama = $_POST['name'];
    $email = $_POST['email'];
    echo "Nama anda : <b>$nama</b><br/><br/>";
    echo "E-mail anda : <b>$email</b>";
}