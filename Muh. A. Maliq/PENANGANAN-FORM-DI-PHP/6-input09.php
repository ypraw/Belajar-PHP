<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<?php
			$jajanPilih = "";
			if ($_SERVER['REQUEST_METHOD'] == "POST") {
				if (!empty($_POST["jajanan"])) {
					$jajanPilih = ($_POST["jajanan"]);
				}
			}
		?>
		<form action="" method="POST" name="input">
			<h2>Pilih Makanan Favorit</h2>
			<select name="jajanan">
				<option value="">-- Pilih Makanan --</option>
				<option <?php if (isset($jajanPilih) && $jajanPilih == "bakso"): ?> selected <?php endif ?> value="bakso">Bakso</option>
				<option <?php if (isset($jajanPilih) && $jajanPilih == "ketoprak"): ?> selected <?php endif ?> value="ketoprak">Ketoprak</option>
				<option <?php if (isset($jajanPilih) && $jajanPilih == "ledre"): ?> selected <?php endif ?> value="ledre">Ledre</option>
				<option <?php if (isset($jajanPilih) && $jajanPilih == "martabak"): ?> selected <?php endif ?> value="martabak">Martabak</option>
			</select>
			<input type="submit" name="pilih" value="Pilih">
		</form>
		<?php
			if (isset($_POST["pilih"])) {
				$jajan = ($_POST["jajanan"]);
				echo "Makanan Favorit Anda adalah : <b><font color=blue>$jajan</font><b>";
			}
		?>
	</body>
</html>