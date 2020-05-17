<title>Inheritance - OOP</title>

<?php
	class Handphone
	{	
		public $merk;
		public $os;

	    public function hidupkan()
	    {
	        return "Menghidupkan HP $this->merk";
	    }
	}

	class Smartphone extends Handphone
	{
	    public function info_hp()
	    {
	        return "Merk : $this->merk. OS : $this->os";
	    }
	}

	$hp = new Smartphone();
	$hp->merk 	= "Samsung";
	$hp->os 	= "Android";

	echo $hp->hidupkan();
	echo "<br>";
	echo $hp->info_hp();
?>