<title>Inherritance - PHP PBO</title>
<?php
class Handphone{
    public $merk;
    public $os;

    public function start(){
        return "Starting HP $this->merk";
    }
}

class Smartphone extends Handphone {
    public function info_hp(){
        return "Merk: $this->merk, Os: $this->os";
    }
}

$hp_obyek = new Smartphone();

$hp_obyek->merk = "Samsung";
$hp_obyek->os = "Android";

echo $hp_obyek->start();
echo "<br/>";
echo $hp_obyek->info_hp();
