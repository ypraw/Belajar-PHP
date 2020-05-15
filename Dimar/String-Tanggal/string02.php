<?php 

	
	$str = "I'm go home now.";
	$str2 = addslashes($str);
	$str3 = stripslashes($str2);


	echo "<b>String asli</b>: $str";
	echo "<br/><b>addslashes()</b>: $str2";
	echo "<br/><b>stripslashes()</b>: $str3";


 ?>