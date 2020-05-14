<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>upload file</title>
</head>
<body>
    
<form action="" method="post" enctype="multipart/form-data">

    Upload file : <input type="file" name="file"><br/>
    <input type="submit" name="upload" value="Upload"/>

</form>

<?php
if(isset($_POST['upload'])){
    $dir_upload = dirname(__FILE__) . "/SimpanFileDisini/";
    $nama_file = $_FILES['file']['name'];

    //

    if(is_uploaded_file($_FILES['file']['tmp_name'])){
        $cek = move_uploaded_file($_FILES['file']['tmp_name'],$dir_upload.$nama_file);
        if($cek){
            die("File berhasil diupload");
        } else{
            die("File gagal diupload");
        }
    }
}

?>


</body>
</html>