<title>Encapsulation - OOP</title>

<?php
	class Handphone
	{	
		public $merk;
		public $os;
		public $tahun_produksi;
	}

	class Smartphone extends Handphone
	{
	    public function info_hp()
	    {
	    	$this->os = "Android";
	        return "Merk : $this->merk. OS : $this->os";
	    }

	    public function tahun_produksi()
	    {
	    	return "Tahun Produksi : $this->tahun_produksi";
	    }
	}

	$hp = new Smartphone();
	$hp->merk 			= "Samsung";
	$hp->tahun_produksi = 2020;

	echo $hp->info_hp();
	echo "<br>";
	echo $hp->tahun_produksi();
?>