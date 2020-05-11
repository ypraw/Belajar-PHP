<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Dimar Hanung Prakoso</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style type="text/css">
		
	body{
		margin: 0px;
		background: #343a40;
		color: white;
		font-family: sans-serif;
	}

	.container{
		width: 100vw;
		height: 100vh;
		display: table;
	}

	.center{
		display: table-cell;
		vertical-align: middle;
	}
	
	.form-flex{
		display: flex;
		flex-wrap: wrap;
		justify-content: center;
	}

	.form-judul{
		text-align: center;
		font-size: 20px;
		margin: 10px;
	}
	
	.form-data{
		width: 50%;
		min-width: 300px;
		background: #ccc;
		box-shadow: 0px 0px 15px -5px black;
		color: black;
		margin: 10px;
		max-width: 350px;
		max-height: 500px;
		padding: 10px 30px;
		border-radius: 5px;
		display: block;
		position: relative;
	}
	.form-data label{
		display: block;
		font-size: 14px;
		margin-bottom: 5px;
	}
	.form-input{
		/*padding: 3px;*/
		text-indent: 10px;
		/*padding-left: 10px;*/
		width: 100%;
		border-radius: 3px;
		height: 30px;
		outline: none;
		border:none;

	}

	.form-input:not(select):focus{
		transition: all ease 0.3s;
		background: #17a2b8;
		color: white;
		box-shadow: inset 0px 1px 10px -5px black;
	}

	.tombol{
		position: absolute;
		bottom: 10px;
		right: 10px;
	}

	input[type="submit"],.tombol{
		background: #28a745;
		outline: none;
		border:none;
		padding:10px;
		color: white;
		border-radius: 5px;
		cursor: pointer;
		transition: all ease 0.3s;
	}
	input[type="submit"]:hover{
		transform: translateY(-5px);
		box-shadow: inset 0px 0px 0px black,0px 5px 5px black;
	}

	input[type="submit"]:focus{
		transform: translateY(0px);
		filter:brightness(0.7);
		box-shadow: inset 0px 2px 5px black, 0px 0px 0px black;
	}

	.data{
		margin: 20px 0px;
	}
	

	</style>
</head>
<body>
	
	<?php
		$ep = "<font color='#dc3435'>";
		$ec = "</font>";
	
		$name = $email = "";
		if ($_SERVER["REQUEST_METHOD"] == "POST") {

		$name = $_POST['name'];
		$anime = $_POST['anime'];
		$nomor = trim($_POST['nomor']);

		if (empty($nomor) || !is_numeric($nomor)) {$nomor = "$ep jangan salah $ec";	}

			if (empty($_POST["name"])) {
				$name = "$ep jgn kosong lah bro $ec";
			} else {
				$name = ($_POST["name"]);
				if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
				$name = "$ep bohong masa pake angka $ec";
				}
		}
		if (empty($_POST["email"])) {
			$email = "$ep jangan kosong :) $ec";
		} else {
			$email = ($_POST["email"]);
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$email = "$ec Salah, coba cek lagi :) $ep";
			}
		}
	}
		?>


<div class="container">
	
	<div class="center">
		
		<div class="form">
			<div class="form-judul">Form Nonton Anime</div>
			<div class="form-flex">
				<form class="form-data" action="" method="post" name="submit">
				<div class="data">
					<label>Nama Lengkap</label>
					<input name="name" class="form-input" type="text">
				</div>
				
				<div class="data">
					<label>Nomor HP</label>
					<input name="nomor" class="form-input" type="text">
				</div>
				<div class="data">
					<label>Email</label>
					<input name="email" class="form-input" type="text">
				</div>
				<div class="data">
					<label>Anime</label>
					<select name="anime" class="form-input">
						<option value="konosuba">Konosuba</option>
						<option value="angel beat">Angel Beats</option>
						<option value="Naruto">Naruto</option>
					</select>
				</div>
				<input type="submit" value="Register" name="register">
			</form>

			<div class="form-data">
				
				<h4>Hasil</h4>
				<div class="opt"><span class="lbl">Nama mu </span><b><?php echo "$name" ?></b> </div>  <hr/>
				<div class="opt"><span class="lbl">Nomor Hp <b><?php echo "$nomor" ?></b></span> </div><hr/>
				<div class="opt"><span class="lbl">Email mu <b><?php echo "$email" ?></b></span> </div><hr/>
				<div class="opt"><span class="lbl">Anime pilihan</span> <b><?php echo "$anime" ?></b> </div>
				
				<button class="tombol" style="cursor: <?php echo $notAllow; ?>;">Lanjut</button>

			</div>

			</div>
			

			

		</div>
		
	</div>
</div>

<?php 

	

 ?>

</body>
</html>