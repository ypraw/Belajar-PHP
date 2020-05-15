<?php
$arrDay = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jum'at", "Sabtu"];
$day = date("w");

echo "Hari ini hari: <b>".$arrDay[$day]."<br>";
?>