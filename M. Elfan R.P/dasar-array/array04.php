<?php
	$arrN = array("Ani"=>80,"Otim"=>90,"Ana"=>75,"Budi"=>85);

	echo "<br>Menampilkan isi array dengan foreach : <br>";
	foreach ($arrN as $nama => $nilai) {
		echo "Nilai $nama $nilai <br>";
	}

	reset($arrN);
	echo '<br>Menampilkan isi array dengan while dan list : <br>';
	while (list($nama,$nilai)=each($arrN)) {
	    echo "Nilai $nama $nilai <br>";
	}
?>