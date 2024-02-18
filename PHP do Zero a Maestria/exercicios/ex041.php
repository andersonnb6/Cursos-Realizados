<?php
	
	$frase = 'Este item está em promoção';

	$arr = explode(" ", $frase);

	for ($i=0; $i < count($arr); $i++) { 
		if ($arr[$i] == 'promoção') {
			echo 'Este item está em ' . strtoupper($arr[$i]);
		}
	}

?>