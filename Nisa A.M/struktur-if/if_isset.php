<?php
$user = "";
if(!isset($user)){
    echo "Variabel belum ada";
}else{
    echo "Variabel sudah ada";
}
//gunakan vardump sbg output lalu return value isset//
echo "<br/>";
$a = "vara";
$b = "varb";

var_dump(isset($a)); //true
echo "<br/>";
var_dump(isset($a, $b)); //true
echo "<br/>";
unset($a);

var_dump(isset($a)); //false
echo "<br/>";
var_dump(isset($a, $b)); //false
echo "<br/>";
$foo = null;        //false
var_dump(isset($foo));