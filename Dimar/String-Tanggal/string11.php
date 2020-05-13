
<form action="" method="post">
	
	NIM Anda :
	<input type="text" name="txtnim"><br/>
	<input type="submit" name="Submit" value="Proses">


</form>



<?php 
	

	if (isset($_POST['Submit'])) {
		$nim = $_POST['txtnim'];
		$a = substr($nim,2,2);
		switch ($a) {
			case '11':
				# code...
				$jurusan = "Teknik Informatika";
				break;
			case '12':
				$jurusan = "Sistem Informasi";
				break;
			case '13':
				$jurusan = "Sistem Komputer";
				break;
			
			default:
				$jurusan = "Salah Jurusan";
				break;
		}
	echo "Nim Anda : $nim <br/>";
	echo "Jurusan Anda : $jurusan";

		# code...
	}



 ?>
