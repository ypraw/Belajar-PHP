<?php
	include 'formClass.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Mahasiswa</title>
</head>
<body>
	<?php
		$form = new Form('', 'Input Form');
		$form->addField('txtnim', 'NIM');
		$form->addField('txtnama', 'Nama');
		$form->addField('txtalamat', 'Alamat');
	?>
	<h3>SIlahkan Isi Form berikut ini : </h3>
	<?php $form->displayForm(); ?>
</body>
</html>