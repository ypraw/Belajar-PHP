<title>Encapsulation - PHP PBO</title>
<?php
class Handphone{
    public $merk;
    public $os;
    private $thn_produksi;
}

class Smartphone extends Handphone {
    public function info_hp(){
        return "Merk: $this->merk, Os: $this->os";
    }

    public function thn_produksi(){
        return  "Tahun Produksi : $this->thn_produksi";
    }
}

$hp_obyek = new Smartphone();

$hp_obyek->merk = "Samsung";
$hp_obyek->os = "Android";
$hp_obyek->thn_produksi = 2020;

echo $hp_obyek->info_hp();
echo "<br/>";
echo $hp_obyek->thn_produksi();
