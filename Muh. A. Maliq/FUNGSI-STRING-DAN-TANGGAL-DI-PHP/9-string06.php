<?php
	$warna = "merah hijau kuning biru jingga coklat hitam";
	$warni = explode(" ", $warna);
	echo $warni[0]."<br>";
	echo $warni[5]."<br>";

	$data = "foo:*:1023:1000::/home/foo:/bin/sh";
	list($user, $pass, $uid, $gid, $gecos, $home, $shell) = explode(":", $data);
	echo $user."<br>";
	echo $pass;
?>