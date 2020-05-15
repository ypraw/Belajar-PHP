<?php
$text = " Ketika berada di pantai, tentu ada keinginan untuk
        menyaksikan matahari terbit dan matahari terbenam.";
$newtext = wordwrap($text, 15, "<br/>");

echo $text."<br/><br/>";
echo $newtext;
?>