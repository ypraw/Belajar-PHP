<?php
	include "13-formClass.php";
	echo "<html>";
		echo "<head>";
			echo "<title>Mahasiswa</title>";
		echo "</head>";
		echo "<body>";
			$form = new Form("","Input Form");
			$form->addField("txtnim", "Nim");
			$form->addField("txtnama", "Nama");
			$form->addField("txtalamat", "Alamat");
			echo "<h3>Silahkan isi Form berikut ini :</h3>";
			$form->displayForm();
		echo "</body>";
	echo "</html>";
?>