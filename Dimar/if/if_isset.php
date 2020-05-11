<?php 
	
	$user= "";

	if (!isset($user)) {
		echo "Variabel tidak ada/belum terbentuk";
	}else{
		echo "Variabel ada";
	}

		echo "<br/>";
		$a = "vara";
		$b = "varb";

		var_dump(isset($a));
		echo "<br/>";
		var_dump(isset($a, $b));
		echo "<br/>";
		unset($a);

		var_dump(isset($a));
		echo "<br/>";
		var_dump(isset($a, $b));
		echo "<br/>";
		$foo = NULL;
		var_dump(isset($foo));


 ?>