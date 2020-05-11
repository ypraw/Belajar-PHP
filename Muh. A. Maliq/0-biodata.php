<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<style type="text/css">
			.error {
				color: red;
			}
			table > tr > td {
				border: 0;
			}
			td {
				padding: 5px
			}
			.w-100 {
				width: 100%
			}
			.w-50 {
				width: 50%
			}
			.w-51 {
				width: 51%
			}
			.w-92 {
				width: 92%
			}
			.w-96 {
				width: 96%
			}
			.cn {
				text-align: center;
			}
			.no-margin {
				margin: 0;
			}
		</style>
	</head>
	<body>
		<center>
			<?php
				$stt = FALSE;
				$tpl = FALSE;
				$namaErr = $alamatErr = $lahirErr = $jenkelErr = $agamaErr = $nomorErr = $emailErr = $darahErr = "";
				$nama = $alamat = $tmplahir = $tgllahir = $jenkel = $agama = $nomor = $email = $darah = "";
				if ($_SERVER['REQUEST_METHOD'] == "POST") {
					if (empty($_POST["nama"])) {
						$namaErr = "* Nama is required..!";
					} else {
						$nama = ($_POST["nama"]);
						$tpl = TRUE;
					}
					if (empty($_POST["tempat_lahir"]) || empty($_POST["tanggal_lahir"])) {
						$lahirErr = "* Tempat, Tanggal Lahir is required..!";
					} else {
						$tmplahir = ($_POST["tempat_lahir"]);
						$tgllahir = ($_POST["tanggal_lahir"]);
						$tpl = TRUE;
					}
					if (empty($_POST["jenis_kelamin"])) {
						$jenkelErr = "* Jenis Kelamin is required..!";
					} else {
						$jenkel = ($_POST["jenis_kelamin"]);
						$tpl = TRUE;
					}
					if (empty($_POST["darah"])) {
						$darahErr = "* Golongan Darah is required..!";
					} else {
						$darah = ($_POST["darah"]);
						$tpl = TRUE;
					}
					if (empty($_POST["agama"])) {
						$agamaErr = "* Agama is required..!";
					} else {
						$agama = ($_POST["agama"]);
						$tpl = TRUE;
					}
					if (empty($_POST["nomor_telepon"])) {
						$nomorErr = "* Nomor HP is required..!";
					} else {
						if (is_numeric($_POST["nomor_telepon"])) {
							$nomor = ($_POST["nomor_telepon"]);
							$tpl = TRUE;
						} else {
							$nomorErr = "* Input Number is required..!";
						}
						
					}
					if (empty($_POST["email"])) {
						$emailErr = "* E-Mail is required..!";
					} else {
						if (!filter_var(($_POST["email"]), FILTER_VALIDATE_EMAIL)) {
							$emailErr = "* Invalid E-Mail Format.!";
						} else {
							$stt = TRUE;
							$tpl = TRUE;
							$email = ($_POST["email"]);
						}
					}
					if (empty($_POST["alamat"]) && $_POST["alamat"] != " ") {
						$alamatErr = "* Alamat is required..!";
					} else {
						$alamat = (nl2br($_POST["alamat"]));
						$tpl = TRUE;
					}
				}
			?>
			<form action="" method="POST" name="biodata">
				<table>
					<tr><td colspan="5" class="cn"><h2 class="no-margin">Data Biodata</h2><hr class="no-margin"></td></tr>
					<tr>
						<td>Nama Lengkap</td>
						<td> : </td>
						<td colspan="2">
							<input class="w-100" type="text" name="nama" <?php if ($nama): ?> value ="<?php echo $nama; ?>" <?php endif ?> >
						</td>
						<td valign="top"> <span class ="error"><?php echo $namaErr; ?></span></td>
					</tr>
					<tr>
						<td>Tempat, Tanggal Lahir</td>
						<td> : </td>
						<td>
							<input class="w-100" type="text" name="tempat_lahir" <?php if ($tmplahir): ?> value ="<?php echo $tmplahir; ?>" <?php endif ?> >
						</td>
						<td>
							<input class="w-100" type="date" name="tanggal_lahir" <?php if ($tgllahir): ?> value ="<?php echo $tgllahir; ?>" <?php endif ?> >
						</td>
						<td valign="top"> <span class ="error"><?php echo $lahirErr; ?></span></td>
					</tr>
					<tr>
						<td>Jenis Kelamin</td>
						<td> : </td>
						<td colspan="2" style="padding-right: 0">
							<select class="w-51" name="jenis_kelamin">
								<option value="">-- Jenis Kelamin --</option>
								<option value="Laki - Laki" <?php if ($jenkel == "Laki - Laki"): ?> selected <?php endif ?> >Laki - Laki</option>
								<option value="Perempuan" <?php if ($jenkel == "Perempuan"): ?> selected <?php endif ?> >Perempuan</option>
							</select>
						</td>
						<td valign="top"> <span class ="error"><?php echo $jenkelErr; ?></span></td>
					</tr>
					<tr>
						<td valign="top">Golongan Darah</td>
						<td> : </td>
						<td colspan="2">
							<input type="radio" name="darah" value="A" <?php if ($darah == "A"): ?> checked <?php endif ?> >A<br>
							<input type="radio" name="darah" value="B" <?php if ($darah == "B"): ?> checked <?php endif ?> >B<br>
							<input type="radio" name="darah" value="AB" <?php if ($darah == "AB"): ?> checked <?php endif ?> >AB<br>
							<input type="radio" name="darah" value="O" <?php if ($darah == "O"): ?> checked <?php endif ?> >O<br>
							<input type="radio" name="darah" value="Tidak Tahu" <?php if ($darah == "Tidak Tahu"): ?> checked <?php endif ?> >Tidak Tahu
						</td>
						<td valign="top"> <span class ="error"><?php echo $darahErr; ?></span></td>
					</tr>
					<tr>
						<td>Agama</td>
						<td> : </td>
						<td colspan="2" style="padding-right: 0">
							<select class="w-51" name="agama">
								<option value="">-- Agama --</option>
								<option value="Islam" <?php if ($agama == "Islam"): ?> selected <?php endif ?> >Islam</option>
								<option value="Kristen" <?php if ($agama == "Kristen"): ?> selected <?php endif ?> >Kristen</option>
								<option value="Katolik" <?php if ($agama == "Katolik"): ?> selected <?php endif ?> >Katolik</option>
								<option value="Hindu" <?php if ($agama == "Hindu"): ?> selected <?php endif ?> >Hindu</option>
								<option value="Budha" <?php if ($agama == "Budha"): ?> selected <?php endif ?> >Budha</option>
								<option value="Kong Hu-Chu" <?php if ($agama == "Kong Hu-Chu"): ?> selected <?php endif ?> >Kong Hu-Chu</option>
							</select>
						</td>
						<td valign="top"> <span class ="error"><?php echo $agamaErr; ?></span></td>
					</tr>
					<tr>
						<td>Nomor HP</td>
						<td> : </td>
						<td colspan="2">
							<input class="w-50" type="text" name="nomor_telepon" <?php if ($nomor): ?> value ="<?php echo $nomor; ?>" <?php endif ?> >
						</td>
						<td valign="top"> <span class ="error"><?php echo $nomorErr; ?></span></td>
					</tr>
					<tr>
						<td>E-Mail</td>
						<td> : </td>
						<td colspan="2">
							<input class="w-100" type="text" name="email" <?php if ($stt): ?> value ="<?php echo $email; ?>" <?php endif ?> >
						</td>
						<td valign="top"> <span class ="error"><?php echo $emailErr; ?></span></td>
					</tr>
					<tr>
						<td valign="top">Alamat</td>
						<td> : </td>
						<td colspan="2">
							<textarea name="alamat" class="w-100" cols="40" rows="3"><?php if ($alamat) {echo $alamat;} ?></textarea>
						</td>
						<td valign="top"> <span class ="error"><?php echo $alamatErr; ?></span></td>
					</tr>
					<tr>
						<td colspan="5"><hr><input type="submit" name="proses" value="Proses"></td>
					</tr>
				</table>
			</form>
			<?php
				if (isset($_POST["proses"]) && $tpl) {
					if ($tgllahir != "") {
						$expD = explode("-", $tgllahir);
						$tmp_tgllahir = $tmplahir.", ".$expD[2]."-".$expD[1]."-".$expD[0];
					} else {
						$tmp_tgllahir = "";
					}
					
					echo "<table><tr><td><hr style='border-top: 2px solid black;'></td></tr>";
					echo "<table>";
						echo "<tr>";
							echo "<td>Nama Lengkap</td>";
							echo "<td>:</td>";
							echo "<td>$nama</td>";
						echo "</tr>";
						echo "<tr>";
							echo "<td>Tempat, Tanggal Lahir</td>";
							echo "<td>:</td>";
							echo "<td>$tmp_tgllahir</td>";
						echo "</tr>";
						echo "<tr>";
							echo "<td>Jenis Kelamin</td>";
							echo "<td>:</td>";
							echo "<td>$jenkel</td>";
						echo "</tr>";
						echo "<tr>";
							echo "<td>Golongan Darah</td>";
							echo "<td>:</td>";
							echo "<td>$darah</td>";
						echo "</tr>";
						echo "<tr>";
							echo "<td>Agama</td>";
							echo "<td>:</td>";
							echo "<td>$agama</td>";
						echo "</tr>";
						echo "<tr>";
							echo "<td>Nomor HP</td>";
							echo "<td>:</td>";
							echo "<td>$nomor</td>";
						echo "</tr>";
						echo "<tr>";
							echo "<td>E-Mail</td>";
							echo "<td>:</td>";
							echo "<td>$email</td>";
						echo "</tr>";
						echo "<tr>";
							echo "<td>Alamat</td>";
							echo "<td>:</td>";
							echo "<td>$alamat</td>";
						echo "</tr>";
					echo "<table>";
				}
			?>
		</center>
	</body>
</html>