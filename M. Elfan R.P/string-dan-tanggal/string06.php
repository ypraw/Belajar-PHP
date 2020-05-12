<?php 
	$w = "merah jingga kuning hijau biru nila ungu";
	$w2 = explode(" ", $w);

	echo ($w2[0]).'<br>';
	echo ($w2[2]).'<br>';

	$dt = "foo:*:1234:1000::/home/foo:/bin/sh";
	list($u, $p,$uid,$gid,$gecos,$homme,$shell) = explode(":", $dt);
	echo '<br>'.$u;
	echo '<br>'.$p;
 ?>