<?php
	$str = "<b><u>We will come to you, My Honey</u></b>";
	echo $str."<br>";
	echo strip_tags($str)."<br>";
	echo strip_tags($str,"<u>")."<br>";
	echo htmlspecialchars($str)."<br>";
	echo htmlentities($str);
?>