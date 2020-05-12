<?php
	$arrW = array("blue","black","red","yellow","green");

	echo "Menampilkan isi array dengan for : <br>";
	for ($i = 0; $i < count($arrW); $i++) {
		echo "Do you like <font color=$arrW[$i]>".$arrW[$i]."</font>?<br>";
	}

	echo "<br>Menampilkan isi array dengan foreach : <br>";
	foreach ($arrW as $w) {
		echo "Do you like <font color=$w>".$w."</font>? <br>";
	}
?>