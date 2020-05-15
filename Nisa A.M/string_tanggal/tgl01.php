<?php
echo "<br>".date("d/m/Y H:i:s");
echo "<br>".date("F j, Y, g:i a");
echo "<br>".date("d.m.y");
echo "<br>".date("Ymd");
echo "<br>".date('j-m-y, it is w Day z');
echo "<br>".date('\i\t \i\s  \t\h\e\ jS \d\a\y.');
echo "<br>".date("D M j G:i:s T Y");
echo "<br>".date("H:i:s");
?>

<!-- Hari :
    d - tgl 2 digit dengan 0 (01 sd 31)
    D - tiga digit nama hari dalam  seminggu(mon sd sun)
    j - tgl tanpa nol (1 sd 31)
    l - nama hari lengkap dalam seminggu(sunday through saturday)
    N - urutan hari dalam seminggu (1(for mon) sd 7(for sun))
    S - akhiran angka english untuk tgl, 2 karakter (st, nd, rd atau th)
    w - urutan hari dalam seminggu (0 for sunday s/d 6 for sat)
    z - urutan hari dlam setahun (0/365)
    Minggu:
    W - urutan minggu dalam setahun (42 -> minggu ke 2 tahun ini)
    Bulan :
    F - nama bulan lengkap (januari sd des)
    m - urutan bulan dalam setahundengan 0 (01 sd 12)
    M - tiga digit nama bulan dalam setahun(jan sd des)
    n - urutan tahun dalam setahun tanpa 0 (1 sd 12)
    t - jml hari dalam tiap bln (28 sd 31)
    Tahun:
    Y - 4 digit tahun (1999)
    y - 2 digit tahun (99)
    Waktu:
    a - Lowercase ante meridiem dan post meridiem (am pm)
    A - Uppercase ante meridiem dan post meridiem (AM PM)
    g - jam format 12 tanpa 0 (1 sd 12)
    G - jam format 24 tanpa 0 (0 sd 23)
    h - jam format 12 dengan 0 (01 sd 12)
    H  - jam format 24 dengan 0 (00 sd 23)
    i - menit dengan 0 (00 sd 59)
    s - detik dengan 0 (00 sd 59)
 -->