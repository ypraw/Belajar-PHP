<?php
$str =  "We will come to you, my HONEY";

echo "<b>String asli</b> : $str";
echo "<br><b>strtolower</b> : ".strtolower($str);
echo "<br><b>strtoupper</b> : ".strtoupper($str);
echo "<br><b>Ucfirst</b> : ".ucfirst($str);
echo "<br><b>Ucwords</b> : ".ucwords($str);
echo "<b><br>Strrev</b> : ".strrev($str);
echo "<b><br>Jumlah karakter</b> : ".strlen($str);
?>

<!-- Fungsi PHP dalam string 
addslashes() - menambah backslashes(\)disetiap tanda kutip(quote) dalam string
chr() - menghasilkan karakter dari bilangan ASCII
crypt() - menghasilkan string terenkripsi searah
echo () - menampilkan satu atau beberapa string
explode() - memcah string berdasarkan suatu delimiter(separator)
htmlentities() - mengubah semua tag html menjadi HTML entities
htmlspesialcars() - mengubah semua karakter khusus menjadi html entities
implode() - menggabungkan elemen array menjadi sring dengan suatu delimiter (separator)
join() - sama dengan implode()
itrim() - menghapus karakter tertentu ("",\t, \n, \r, \0, \x0B)di awal string
md5() - menghasilkan string terenkripsi  searah 
nl2br() - menambahkan html line break (<br>) sebelum semua baris baru dalam string
number_format() - mengatur format angka.
ord() - menghasilkan kode ASCII dari suatu karakter.
rtim() - menghapus karakter tertentu ("",\t, \n, \r, \0, \x0B)di awal string
split() - sama dengan exsplode 
str_repeat() - mengulang string 
str_replace() - mengganti semua string dalam pola menjadai suatu string
str_tags() - mengabaikan html dan php dalam string
stripslashses() - menghilangkan backslashes(\) dalam string
strlen() - menghitung panjang string
strpos() - mencari posisi pertama sebuah string dalam string
strchr() -  mencari posisi terakhir sebuah string dalam string
strrev() - membalik string
strstr() - mencari posisi pertama sebuah karakter dalam strtolower() - mengubah string menjadi huruf kecil(lower-case)
strtoupper() - mengubah string menjadi huruf kapital(upper-case)
substr() - memotong string trim()-menghapus karakter tertentu ("",\t, \n, \r, \0, \x0B)di awal dan akhir string
ucfirst() - mengubah huruf pertama dari semua string menjadi upper-case
ucwords() - mengubah huruf pertama tiap kata dalam string menjadi upper-case
wordwrap() - memotong sejumlah karakter dalam string dengan stringbreak-character
-->