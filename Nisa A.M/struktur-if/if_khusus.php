<?php
$tahun = date('Y');
$kabisat = ($tahun % 4 == 0) ? "Kabisat" : "Bukah Kabisat";
echo "Tahun <b>$tahun</b> $kabisat";