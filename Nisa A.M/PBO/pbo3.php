<?php
class Mobil{
    var $warna = "Biru";
    var $merk = "Honda";
    var $harga = 150000000;

    function gantiWarna($warnaBaru){
        $this->warna = $warnaBaru;
    }
    function tampilWarna(){
        echo "Warna mobilnya : ".$this->warna;
    }
}
