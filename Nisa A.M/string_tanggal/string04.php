<?php
$str = "<b><u>We will come to you, my honey</u></b>";

echo $str."<br/>";
//no tag html
echo strip_tags($str)."<br/>";
//allow tag <u>
echo strip_tags($str, "<u>")."<br/>";
//tampil apa adanya
echo htmlspecialchars($str)."<br/>";
echo htmlentities($str);
?>