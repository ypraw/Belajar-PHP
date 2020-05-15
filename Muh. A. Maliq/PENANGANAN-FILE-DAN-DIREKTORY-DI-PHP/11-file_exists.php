<?php
	$fileName = "data.txt";

	if (file_exists($fileName)) {
		echo "File $fileName ada.!";
	} else {
		echo "File $fileName Tidak Ada.!";
	}	
?>