<?php
	$s = "<b><u>Tunggu aku pulang, ZEYENK</u></b>";

	echo $s.'<br>';
	echo strip_tags($s,'<u>').'<br>';
	echo htmlspecialchars($s).'<br>';
	echo htmlspecialchars($s).'<br>';
?>