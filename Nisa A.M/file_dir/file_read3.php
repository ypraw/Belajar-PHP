<?php
$namaFile = "data.txt";
$handle = @fopen($namaFile, "r");
if($handle){
    while(!feof($handle)){
        $buffer = fgets($handle, 4096);
        echo $buffer."<br>";
}
fclose($handle);
}
?>

<!--menampilkan keseluruhan file tiap baris
pembacaan dilakukan selama pointer belumsampai di end-of-file. Fungsi feof() untuk memriksa pointer file sudah berada di akhir file atau belum -->