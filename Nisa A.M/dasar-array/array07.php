<?php
$buku = [
    ["Pemrograman",22,18],
    ["Teknik",15,13],
    ["Design",5,2],
    ["Sejarah",17,15]
];

echo $buku[0][0]." : Jumlah Stok: " .$buku[0][1].", Laku terjual:".$buku[0][2]."<br>";
echo $buku[1][0]." : Jumlah Stok: " .$buku[1][1].", Laku terjual:".$buku[1][2]."<br>";
echo $buku[2][0]." : Jumlah Stok: " .$buku[2][1].", Laku terjual:".$buku[2][2]."<br>";
echo $buku[3][0]." : Jumlah Stok: " .$buku[3][1].", Laku terjual:".$buku[3][2]."<br>";

//array 2 dimensi -> baris, kolom//