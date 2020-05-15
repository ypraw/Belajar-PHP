<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<form action="" method="post" enctype="multipart/form-data">
			Pilih File : <input type="file" name="file">
			<hr>
			<input type="submit" name="submit" value="Upload">
		</form>
		<?php
			if (isset($_POST['submit'])) {
				$dir_upload = dirname(__FILE__)."/SimpanFile/";
				$namaFile = $_FILES["file"]["name"];
				if (is_uploaded_file($_FILES["file"]["tmp_name"])) {
					$cek = move_uploaded_file($_FILES["file"]["tmp_name"], $dir_upload.$namaFile);
					if ($cek) {
						die("File <b>BERHASIL</b> di Upload");
					} else {
						die("File <b>GAGAL</b> di Upload");
					}
				}
			}
		?>
	</body>
</html>