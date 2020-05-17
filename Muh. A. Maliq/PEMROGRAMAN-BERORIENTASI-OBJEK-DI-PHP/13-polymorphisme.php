<title>Polymorphisme - OOP PHP</title>
<?php
	abstract class animal {
		abstract public function bersuara();
	}
	
	interface mamalia {
		public function melahirkan();
	}

	class kucing extends animal {
		public function bersuara() {
			return "Suara Kucing : Meooong Meooong";
		}
	}

	class bebek extends animal {
		public function bersuara() {
			return "Suara Bebek : Weeek Weeek";
		}
	}

	class sapi extends animal implements mamalia {
		public function bersuara() {
			return "Suara Sapi : Mouuuu Mouuuu";
		}

		public function melahirkan() {
			return "Sapi termasuk mamalia karena berkembang biak dengan cara melahirkan.";
		}
	}

	$jenis_kucing = new kucing();
	$jenis_bebek = new bebek();
	$jenis_sapi = new sapi();

	function suara($binatang) {
		return $binatang->bersuara();
	}

	function lahir($binatang) {
		return $binatang->melahirkan();
	}

	echo suara($jenis_kucing);
	echo "<br>";
	echo suara($jenis_bebek);
	echo "<br>";
	echo suara($jenis_sapi);
	echo "<br>";
	echo lahir($jenis_sapi);
?>