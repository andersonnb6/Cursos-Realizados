<?php
	
	function imparPar($num) {
		
		if ($num % 2 == 0) {
			$result = 'par';
		} else {
			$result = 'ímpar';
		}

		return "Número $result.<br>";
	}

	echo imparPar(11);
	echo imparPar(10);
	echo imparPar(23);
	echo imparPar(38);
?>