<title>Polymorphisme - PHP PBO</title>
<?php
abstract class Animal{
    abstract public function bersuara();
}

interface Mamalia{
    public function melahirkan();
}

class Kucing extends Animal{
    public function bersuara(){
        return "Suara Kucing : miaw miaw miaw";
    }
}

class Bebek extends Animal{
    public function bersuara(){
        return "Suara Bebek : kwek kwek kwek";
    }
}

class Sapi extends Animal implements Mamalia{
    public function bersuara(){
        return "Suara Sapi : mou mou mou";
    }
    public function melahirkan(){
        return "Sapi termasuk mamalia karena melahirkan";
    }
}

$jenis_kucing = new Kucing;
$jenis_bebek = new Bebek;
$jenis_sapi = new Sapi;

function suara($binatang){
    return $binatang->bersuara();
}

function lahir($binatang){
    return $binatang->melahirkan();
}

echo suara($jenis_kucing)."<br/>";
echo suara($jenis_bebek)."<br/>";
echo suara($jenis_sapi)."<br/>";
echo lahir($jenis_sapi)."<br/>";
