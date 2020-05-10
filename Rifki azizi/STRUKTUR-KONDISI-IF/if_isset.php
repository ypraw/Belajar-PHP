<?php
$user="";
if(!isset($user)){
    echo "variabel tidak ada/belum terbentuk";
} else{
    echo "Variabel ada";
}
//vardumb sbg output

echo"<br/>";
$a="vara";
$b="varb";

var_dump (isset($a)); //TRUE
echo "<br/>";
var_dump (isset($a ,$b)); //TRUE
echo "<br/>";
unset($a);

var_dump (isset($a));    //FALSE
echo "<br/>";
var_dump (isset($a,$b));
echo "<br/>";
$foo=null;
var_dump(isset($foo));
?>