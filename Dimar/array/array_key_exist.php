<?php 

	$arrTulis = array("Buku"=>6,"Pensil"=>9,"Bolpen"=>5,"Penggaris"=>4);
	echo "<b>Pencarian Array dengan array_key_exists";

	echo "<pre>";
	print_r($arrTulis);
	echo("</pre>");

	if (array_key_exists("Bolpen", $arrTulis)) {
		echo "Bolpen ada di meja <br><br/>";
	} else{
		echo "Tidak ada Bolen di meja";
	}



 ?>