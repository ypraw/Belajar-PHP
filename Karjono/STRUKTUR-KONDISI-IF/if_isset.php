<?php
$user = "";
if (!isset($user)) {
    echo "Variabel tidak ada/belum terbentuk";
} else {
    echo "Variabel ada";
}
// kita menggunakan var_dump sebagai output
// return value dari isset().
echo "<br/>";
$a = "vara";
$b = "varb";

var_dump(isset($a));      // TRUE
echo "<br/>";
var_dump(isset($a, $b)); // TRUE
echo "<br/>";
unset($a);

var_dump(isset($a));     // FALSE
echo "<br/>";
var_dump(isset($a, $b)); // FALSE
echo "<br/>";
$foo = NULL;
var_dump(isset($foo));   // FALSE
