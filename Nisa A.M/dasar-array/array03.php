<?php
$arrWarna = ['blue', 'black','red','yellow', 'green'];
echo "Menampilkan isis array dengan for : <br>";
for ($i=0; $i < count($arrWarna); $i++){
    echo "Do you like <font color=$arrWarna[$i]>".$arrWarna[$i]."</font>?<br>";
}

echo "Menampilkan isi array dengan foreach : <br>";
foreach ($arrWarna as $warna) { 
    echo "Do you like <font color=$warna>".$warna."</font>?<br>";
}
   