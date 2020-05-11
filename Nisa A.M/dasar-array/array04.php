<?php
$arrNilai = ["Ani"=>90, "Otim"=>80, "Ana"=>75, "Budi"=>85];
echo "Menampilkan isiarray dengan foreach : <br>";
foreach($arrNilai as $nama => $nilai){
echo "Nilai $nama = $nilai<br>";
}

reset($arrNilai);
echo"<br>Menampilkan isi array dengan while dan list : <br> ";
while(list($nama, $nilai)=each($arrNilai)){
    echo "Nilai $nama=$nilai<br>";
}

//tidak bisa dengan for//