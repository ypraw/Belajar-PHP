<?php
$a = FALSE;
$b = TRUE;
$c = TRUE;
echo '$a=' . ($a ? "TRUE" : "FALSE");
echo '<br/>$b=' . ($b ? "TRUE" : "FALSE");
echo '<br/>$c=' . ($c ? "TRUE" : "FALSE");
echo '<br/>$a &&  $b || $c =' . ($a && $b || $c);
echo '<br/>$a AND $b || $c =' . ($a AND $b || $c);
