<title>Inhertance - PHP OOP</title>
<?php
	class handphone {
		public $merk;
		public $os;

		public function hidupkan() {
			return "Menghidupkan HP ".$this->merk;
		}
	}

	class smartphone extends handphone {
		public function info_hp() {
			return "Merk : $this->merk, OS : $this->os";
		}
	}

	$hp_obyek = new smartphone();
	$hp_obyek->merk = "Samsung";
	$hp_obyek->os = "Android";

	echo $hp_obyek->hidupkan();
	echo "<br>";
	echo $hp_obyek->info_hp();
?>