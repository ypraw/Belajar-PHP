<?php
	$str = "I'm go Home now.";
	$str2 = addslashes($str);
	$str3 = stripslashes($str2);

	echo "<b>String Asli :</b> $str<br>";
	echo "<b>addslashes() :</b> $str2<br>";
	echo "<b>stripslashes() :</b> $str3";
?>