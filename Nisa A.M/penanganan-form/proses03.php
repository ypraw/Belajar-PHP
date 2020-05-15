<?php
if(isset($_GET['input'])){
    $nama = $_GET['name'];
    $email = $_GET['email'];
    echo "Nama anda : <b>$nama</b><br/><br/>";
    echo "E-mail anda : <b>$email</b>";
}