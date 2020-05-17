<title>Polymorphisme - OOP</title>

<?php
	abstract class Animal
	{
	    abstract public function bersuara();
	}

	interface Mamalia {
		public function melahirkan();
	}

	class Kucing extends Animal
	{
		public function bersuara()
		{
			return "Suara Kucing MEEOONNG";
		}
	}

	class Bebek extends Animal
	{
		public function bersuara()
		{
			return "Suara Bebek WKWKWKWK";
		}
	}

	class Sapi extends Animal implements Mamalia
	{
		public function bersuara()
		{
			return "Suara Sapi MOOOH";
		}

		public function melahirkan()
		{
			return "Sapi Termasuk Mamalia karena melahirkan";
		}
	}

	$kucing = new Kucing();
	$bebek 	= new Bebek();
	$sapi 	= new Sapi();

	function suara($binatang)
	{
		return $binatang->bersuara();
	}

	function lahir($binatang)
	{
		return $binatang->melahirkan();
	}

	echo suara($kucing);
	echo "<br>";
	echo suara($bebek);
	echo "<br>";
	echo suara($sapi);
	echo "<br>";
	echo lahir($sapi);
	echo "<br>";
?>