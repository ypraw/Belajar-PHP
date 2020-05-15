<?php
class Mobil{
    var $warna;
    var $merk;
    var $harga;

    function __construct(){
        $this->warna = "Biru";
        $this->merk = "Honda";
        $this->harga = 150000000;
    }

    function gantiWarna($warnaBaru){
        $this->warna = $warnaBaru;
    }
    function tampilWarna(){
        echo "Warna mobilnya : ".$this->warna;
    }
}