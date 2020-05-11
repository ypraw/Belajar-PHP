<?php
if (isset($_GET['input'])) {
   $nama = $_GET['name'];
   $email = $_GET['email'];
   echo "Nama Anda : <b>$nama</b> <br/><br/>";
   echo "Email Anda : <b>$email</b>";
}
