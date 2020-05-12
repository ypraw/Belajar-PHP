<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>BIODATA</title>
	<style>
		.error{
			color: red;
		}
	</style>
</head>
<body>
	<?php
		$nama = '';
		$namaErr = '';
		$alamat = '';
		$alamatErr = '';
		$tempat_lahir = '';
		$tempatErr = '';
		$tanggal_lahir = '';
		$tanggalErr = '';
		$jk = '';
		$jkErr = '';
		$agama = '';
		$agamaErr = '';
		$no_hp = '';
		$no_hpErr = '';
		$email = '';
		$emailErr = '';
		$goldar = '';
		$goldarErr = '';
		
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			// nama
			$nama 	= $_POST['nama'];
			if (empty($nama)) {
				$namaErr = 'Nama tidak Boleh Kosong';
			}else{
				$n = trim($_POST['nama']);
				if (!preg_match("/^[a-zA-Z ]*$/",$n)) {
					$namaErr = 'Hanya Huruf dan Spasi';
				}
			}

			// alamat
			$alamat = $_POST['alamat'];
			if (empty($alamat)) {
				$alamatErr = 'Alamat tidak Boleh Kosong';
			}

			// tempat lahir
			$tempat_lahir = $_POST['tempat_lahir'];
			if (empty($tempat_lahir)) {
				$tempatErr = 'Tempat Lahir tidak Boleh Kosong';
			}

			// tanggal lahir
			$tanggal_lahir = $_POST['tanggal_lahir'];
			if (empty($tanggal_lahir)) {
				$tanggalErr = 'Masukkan Tanggal Lahir';
			}

			// jk
			$jk 	= $_POST['jk'];
			if (empty($jk)) {
				$jkErr = 'Pilih Jenis Kelamin';
			}

			// agama
			$agama 	= $_POST['agama'];
			if (empty($jk)) {
				$agamaErr = 'Pilih Agama';
			}

			// no_hp
			$no_hp 	= $_POST['no_hp'];
			if (empty($no_hp)) {
				$no_hpErr = 'Masukkan No. HP Anda';
			}else{
				if (!is_numeric($no_hp)) {
					$no_hpErr = 'No.Hp Hanya Berisi Angka';
				}elseif(strlen($no_hp)>12) {
					$no_hpErr = 'No.Hp Max 12 Digit Angka';
				}
			}

			// email
			$email 	= $_POST['email'];
			if (empty($_POST['email'])) {
				$emailErr = 'Email tidak Boleh Kosong';
			}else{
				if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
					$emailErr = 'Email tidak Valid';
				}
			}

			// goldar
			if (isset($_POST['goldar'])) {
				$goldar = $_POST['goldar'];
				if (empty($goldar)) {
					$goldarErr = 'Pilih Gol. Darah';
				}
			}
		}
	?>

	<form action="" method="post" name="input">
		<h2>Input Biodata</h2>
		<table border=0>
			<tr style="vertical-align: top;">
				<td>Nama</td>
				<td>:</td>
				<td>
					<input type="text" name="nama" value="<?php echo $nama ?>">
				</td>
				<td>
					<span class="error">* <?php echo $namaErr ?></span>
				</td>
			</tr>
			<tr style="vertical-align: top;">
				<td>Alamat</td>
				<td>:</td>
				<td>
					<textarea name="alamat" id="" cols="30" rows="3"><?php echo $alamat ?></textarea>
				</td>
				<td>
					<span class="error">* <?php echo $alamatErr ?></span>
				</td>
			</tr>
			<tr style="vertical-align: top;">
				<td>Tempat,  Tangga Lahir</td>
				<td>:</td>
				<td>
					<input type="text" name="tempat_lahir" value="<?php echo $tempat_lahir ?>">, <input type="date" name="tanggal_lahir" value="<?php echo $tanggal_lahir ?>">
				</td>
				<td>
					<span class="error">* <?php echo $tempatErr ?></span> <br>
					<span class="error">* <?php echo $tanggalErr ?></span>
				</td>
			</tr>
			<tr style="vertical-align: top;">
				<td>Jenis Kelamin</td>
				<td>:</td>
				<td>
					<select name="jk" id="">
						<option value="">--Pilih Jenis Kelamin--</option>
				
						<option value="L" <?php if($jk=='L'){echo "selected";} ?>>Laki-laki</option>
						<option value="P" <?php if($jk=='P'){echo "selected";} ?>>Perempuan</option>
					</select>
				</td>
				<td>
					<span class="error">* <?php echo $jkErr ?></span>
				</td>
			</tr>
			<tr style="vertical-align: top;">
				<td>Agama</td>
				<td>:</td>
				<td>
					<select name="agama" id="">
						<option value="">--Pilih Agama--</option>
						<option value="Islam" <?php if($agama=='Islam'){echo "selected";} ?>>Islam</option>
						<option value="Kristen" <?php if($agama=='Kristen'){echo "selected";} ?>>Kristen</option>
						<option value="Katolik" <?php if($agama=='Katolik'){echo "selected";} ?>>Katolik</option>
						<option value="Hindu" <?php if($agama=='Hindu'){echo "selected";} ?>>Hindu</option>
						<option value="Budha" <?php if($agama=='Budha'){echo "selected";} ?>>Budha</option>
					</select>
				</td>
				<td>
					<span class="error">* <?php echo $agamaErr ?></span>
				</td>
			</tr>
			<tr style="vertical-align: top;">
				<td>No. HP</td>
				<td>:</td>
				<td>
					<input type="text" name="no_hp" value="<?php echo $no_hp ?>">
				</td>
				<td>
					<span class="error">* <?php echo $no_hpErr ?></span>
				</td>
			</tr>
			<tr style="vertical-align: top;">
				<td>E-mail</td>
				<td>:</td>
				<td>
					<input type="text" name="email" value="<?php echo $email ?>">
				</td>
				<td>
					<span class="error">* <?php echo $emailErr ?></span>
				</td>
			</tr>
			<tr style="vertical-align: top;">
				<td>Gol. Darah</td>
				<td>:</td>
				<td>
					<input type="radio" name="goldar" value="A" <?php if($goldar=='A'){echo "checked";} ?>> A <br>
					<input type="radio" name="goldar" value="B" <?php if($goldar=='B'){echo "checked";} ?>> B <br>
					<input type="radio" name="goldar" value="AB" <?php if($goldar=='AB'){echo "checked";} ?>> AB <br>
					<input type="radio" name="goldar" value="O" <?php if($goldar=='O'){echo "checked";} ?>> O <br>
					<input type="radio" name="goldar" value="-" <?php if($goldar=='-'){echo "checked";} ?>> Tidak Tahu <br>
				</td>
				<td>
					<span class="error">* <?php echo $goldarErr ?></span>
				</td>
			</tr>
			<tr>
				<td colspan="3">
					<input type="submit" name="proses" value="Proses">
				</td>
			</tr>
		</table>
	</form>

	<?php
	if ($nama!='' && $alamat!='' && $tempat_lahir!='' && $tanggal_lahir!='' && $jk!='' && $no_hp!='' && $agama!='' && $email!='' && $goldar!='') {
		echo '<br><br>';
		echo '<b>Nama : </b>'.$nama.'<br>';
		echo '<b>Alamat : </b>'.$alamat.'<br>';
		echo '<b>Tempat, Tanggal Lahir : </b>'.$tempat_lahir.', '.$tanggal_lahir.'<br>';
		echo '<b>Jenis Kelamin : </b>'.$jk.'<br>';
		echo '<b>No. HP : </b>'.$no_hp.'<br>';
		echo '<b>Agama : </b>'.$agama.'<br>';
		echo '<b>E-mail : </b>'.$email.'<br>';
		echo '<b>Gol. Darah : </b>'.$goldar.'<br>';
	}
	?>
</body>
</html>