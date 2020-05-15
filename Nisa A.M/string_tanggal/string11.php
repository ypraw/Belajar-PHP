<form action="" method="post">
    NIM Anda : 
    <input type="text" name="txtnim"><br>
    <input type="submit" name="submit" value="proses">
</form>

<?php
if(isset($_POST['submit'])){
    $nim = $_POST['txtnim'];
    $a = substr($nim,2,2);
    switch($a){
        case '11' :
            $jrsn = "Teknik Informatika";
            break;
        case '12' :
            $jrsn = "Sistem Informasi";
            break;
        case '13' :
            $jrsn = "Sistem Komputer";
            break;
        default:
            $jrsn = "Salah Jurusan";
    }
    echo "NIM anda : $nim <br/>";
    echo "Jurusan anda : $jrsn";
}
?>