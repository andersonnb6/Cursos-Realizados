<?php
	
	function maiorQue7($arr) {
		
		$arrResult = [];
		
		for ($i=0; $i < count($arr); $i++) { 

			if ($arr[$i] > 7) {
				array_push($arrResult, $arr[$i]);
			}
		}

		return $arrResult;
	}

	$arrTeste = [1,2,3,4,5,6,7,8,9,10,11,12,13,14];

	print_r(maiorQue7($arrTeste));
?>