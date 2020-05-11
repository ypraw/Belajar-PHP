<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Dimar Hanung Prakoso</title>
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
		background: #ccc;
		box-shadow: 0px 0px 15px -5px black;
		color: black;
		margin: 10px;
		max-width: 300px;
		max-height: 500px;
		padding: 10px 30px;
		border-radius: 5px;
		display: block;
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

	.data{
		margin: 20px 0px;
	}
	

	</style>
</head>
<body>
	
	<?php
		$ep = "<font color='#dc3435'><b>";
		$ec = "</b></font>";
		if (isset($_POST['register'])) {
		# code...
		$name = $_POST['name'];
		$anime = $_POST['anime'];
		$nomor = trim($_POST['nomor']);

		if (empty($nomor) || !is_numeric($nomor)) {
			$nomor = "$ep Nomor Tidak Valid $ec";
		}

		
	}



		// mendefinisikan variables dengan values kosong
		//$nameErr = $emailErr = "";
		
		$name = $email = "";
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			if (empty($_POST["name"])) {
				$name = "$ep jgn kosong lah bro $ec";
			} else {
				$name = ($_POST["name"]);
				if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
				$name = "$ep Cuma huruf dan spasi yang boleh bro... $ec";
				}
		}
		if (empty($_POST["email"])) {
			$email = "$ep Email is required $ec";
		} else {
			$email = ($_POST["email"]);
			// check if e-mail address is well-formed
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$email = "$ec Invalid email format $ep";
			}
		}




	}


	//batas

		?>


<div class="container">
	
	<div class="center">
		
		<div class="form">
			<div class="form-judul">Isi Data Diri Anda...</div>
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
					</select>
				</div>
				<input type="submit" value="Register" name="register">
			</form>

			<div class="form-data">
				
				
				<div class="opt"><span class="lbl">Nama :</span><?php echo "$name" ?> </div>  
				<div class="opt"><span class="lbl">Nomor Hp :<?php echo "$nomor" ?></span> </div>
				<div class="opt"><span class="lbl">Email :<?php echo "$email" ?></span> </div>
				<div class="opt"><span class="lbl">Anime :</span> <?php echo "$anime" ?> </div>


			</div>

			</div>
			

			

		</div>
		
	</div>
</div>

<?php 

	

 ?>

</body>
</html>