<?php
	$s = "Jum'at ini saya pulang";

	$s1 = addslashes($s);
	$s2 = stripslashes($s);

	echo '<b>String asli : </b>'.$s;
	echo '<br><b>addslashes() : </b>'.$s1;
	echo '<br><b>stripslashes() : </b>'.$s2;
?>