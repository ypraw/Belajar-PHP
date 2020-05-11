<?php 

	function luas_persegi_panjang($panjang,$lebar){
		return $panjang * $lebar;
	}


	function genap($awal, $akhir){

		for ($i=$awal; $i < $akhir ; $i++) { 
			if ($i%2 == 0) {
				echo "$i ";
			}
		}


	}


$arr = get_defined_functions();
echo "<pre>";
print_r($arr);
echo "</pre>";




 ?>