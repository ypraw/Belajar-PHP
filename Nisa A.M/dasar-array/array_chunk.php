<?php
$arrWarna = ['merah','hijau','biru','unggu','jingga','kuning'];
echo "<pre>";print_r(array_chunk($arrWarna,2));echo"</pre>";

echo "<pre>";print_r(array_chunk($arrWarna,2,true));echo"</pre>";

/*array_chunck = memecah array mnjd bbrp elemen array brdsrkn jml elemen tertentu
array_count_values = menghitung bnyknya elemen etiap anggota array
array_pop = menghapus elemen terakhir
array_push = menambah elemen baru di posisi terakhir
array_shift = menghapus elemen pertama
array_unshift = menambah elemen di posisi pertamaa
 */