<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload File</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        Upload file : <input type="file" name="file"><br/>
        <input type="submit" name="upload" value="upload" id=""/>
    </form>
    <?php
    if(isset($_POST['upload'])){
        $dir_upload = dirname(__FILE__)."/SimpanFileDisini/";
        $name_file = $_FILES['file']['name'];
        if(is_uploaded_file($_FILES['file']['tmp_name'])) {
            $cek = move_uploaded_file($_FILES['file']['tmp_name'], $dir_upload . $name_file);
            if($cek){
                die("File berhasil diupload");
            }else{
                die("File gagal diupload");
            }
        }
    }
    ?>
</body>
</html>

<!-- enctype="multipart/form-data"
    type="file"
    $_FILES['file']['name'] : nama asli dari file yang diupload
    $_FILES['file']['tmp_name'] : Nama temporary file yang di upload
    $_FILES['file']['size'] : ukuran file asli(byte)
    $_FILES['file']['type']  : MIME type file yang diupload 
    folder tujuan harus writeable() -Linux(777, 775)
    is_uploaded_file() : memeriksa apakah file sudah terupload ke server tepatnya temporary yang ditentukan php
    move_uploaded_file : file yang sudah terupload dimove ke direktori tujuan
    -->