<?php
$namaFile = "data.txt";
$handle = fopen($namaFile, "r");
if(!$handle){
    echo "<b>File tidak dapat di buka atau belum ada</b>";
}else{
    echo "<b>File berhasil di buka</b>";
}
fclose($handle);
?>

<!-- fopen() - untuk membuka dan/ membuat file 
fopen($namafile, $mode) -- $mode merupakan mode akses file
mode r - hanya untuk baca file, pointer berada diawal file
    r+ - untuk baca dan tulis file, pointer berada diawal file
    w - hanya untuk tulis file, isi file lama dihapus, jila file
        belum ada maka akan di create
    w+ - untuk baca dan tulis file, isi file lama dihapus, jika file belum ada maka akan di create
    a - hanya untuk menambahkan file, pointer diakhir file, jika file belum ada maka akan di create
    a+ - untuk membaca dan menambahkan file, pointer diakhir file,jika file belum ada maka akan di create
    x - untuk buat dan baca saja, pointer berada diawal file, jika file belum ada maka di create, dan jika file sudah ada akan muncul pesan error
    x+ - untuk buat dan baca isi, pointer berada diawal file, jika file belum ada maka di create, dan jika file sudah ada akan muncul pesan error
    c - untuk membaca isi file saja, pointer berada diawal file, jika file belum ada maka di create, dan jika file sudah ada maka isi file di truncate
    c+ - untuk membaca dan tulis isi file, pointer berada diawal file, jika file belum ada maka di create, dan jika file sudah ada maka isi file di truncate -->