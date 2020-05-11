<?php
if (isset($_POST['input'])) {
   $nama = $_POST['name'];
   $email = $_POST['email'];
   echo "Nama Anda : <b>$nama</b> <br/><br/>";
   echo "Email Anda : <b>$email</b>";
}
