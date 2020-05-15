<?php
$str = "I'M go home now.";
$str2 = addslashes($str);
$str3 = stripslashes($str);

echo "<b>String asli</b> : $str";
echo "<br><b>Addslashes</b> : $str2";
echo "<br><b>Stripslashes</b> : $str3";
?>