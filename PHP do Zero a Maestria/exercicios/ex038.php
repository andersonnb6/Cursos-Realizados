<?php
		
	function arrayToString($arr) {

		$str = "";

		for ($i=0; $i < count($arr); $i++) { 
			$str .= "$arr[$i], ";
		}

		return $str;
	}
	
	$arrTeste = ['arroz','feijão','sabonete','pasta','vinagre'];

	echo arrayToString($arrTeste);
?>