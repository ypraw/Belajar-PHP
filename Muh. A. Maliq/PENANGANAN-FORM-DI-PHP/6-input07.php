<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<style type="text/css">
			.error {
				color: red;
			}
		</style>
	</head>
	<body>
		<?php
			$jurusanErr = "";
			$jurusan = "";
			if ($_SERVER['REQUEST_METHOD'] == "POST") {
				if (empty($_POST["jurusan"])) {
					$jurusanErr = "Jurusan is required..!";
				} else {
					$jurusan = ($_POST["jurusan"]);
				}
			}
		?>
		<h2>Pilih Jurusan</h2>
		<p><span class="error">* required field.</span></p>
		<form action="" method="POST" name="input">
			<input type="radio" name="jurusan"<?php if (isset($jurusan) && $jurusan == "TI"): ?> checked <?php endif ?> value="TI">Teknik Informatika
			<input type="radio" name="jurusan"<?php if (isset($jurusan) && $jurusan == "SI"): ?> checked <?php endif ?> value="SI">Sistem Informasi
			<input type="radio" name="jurusan"<?php if (isset($jurusan) && $jurusan == "SK"): ?> checked <?php endif ?> value="SK">Sistem Komputer
			<input type="radio" name="jurusan"<?php if (isset($jurusan) && $jurusan == "KA"): ?> checked <?php endif ?> value="KA">Komputerisasi Akuntansi
			<span class="error">*<?php echo " ".$jurusanErr; ?></span><br><br>
			<input type="submit" name="pilih" value="Pilih Jurusan">
			<hr>
		</form>
	</body>
</html>
<?php
	if (isset($_POST["pilih"])) {
		if (empty($_POST["jurusan"])) {
			$jurusanErr = "Jurusan is required..!";
			echo "Jurusan Anda adalah : <b><font color='red'>$jurusanErr</font></b>";
		} else {
			$jurusan = ($_POST["jurusan"]);
			echo "Jurusan Anda adalah : <b><font color='red'>$jurusan</font></b>";
		}
		
	}
?>