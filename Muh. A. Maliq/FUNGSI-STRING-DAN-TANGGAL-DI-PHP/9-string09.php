<?php
	$txt = "Ketika berada di pantai, tetntu ada keinginan untuk menyaksikan matahari terbit dan matahari terbenam.";
	$newtxt = wordwrap($txt, 15, "<br>");
	echo $txt."<br/><br/>";
	echo $newtxt;
?>