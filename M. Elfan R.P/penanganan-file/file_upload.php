<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Upload</title>
</head>
<body>
	<form action="" method="post" enctype="multipart/form-data">
		Upload File : <input type="file" name="file"> <br>
		<input type="submit" name="upload" value="Upload">
	</form>
</body>
</html>
<?php 
	if (isset($_POST['upload'])) {
		$dir = dirname(__FILE__).'/simpandisini';
		$nm = $_FILES['file']['name'];

		if (is_uploaded_file($_FILES['file']['tmp_name'])) {
			$c = move_uploaded_file($_FILES['file']['tmp_name'], $dir.$nm);
			if ($c) {
				die('File Berhasil diupload');
			}else{
				die('File Gagal diupload');
			}
		}
	}
?>