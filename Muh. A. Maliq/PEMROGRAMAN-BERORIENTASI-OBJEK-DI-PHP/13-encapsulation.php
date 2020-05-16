<title>Enkapsulasi - OOP PHP</title>

<?php
	class handphone {
		public $merk;
		public $os;
		private $tahun_produksi;
	}

	class smartphone extends handphone {
		public function info_hp() {
			return "Merk : $this->merk, OS : $this->os";
		}

		public function tahun_produksi() {
			return "Tahun Produksi : $this->tahun_produksi";
		}
	}

	$hp_obyek = new smartphone();
	$hp_obyek->merk = "Samsung";
	$hp_obyek->os = "Android";
	$hp_obyek->tahun_produksi = 2020;

	echo $hp_obyek->info_hp();
	echo "<br>";
	echo $hp_obyek->tahun_produksi();
?>