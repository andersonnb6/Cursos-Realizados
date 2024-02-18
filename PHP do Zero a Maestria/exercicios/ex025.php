<?php
	$idade1 = 60;

	if (is_numeric($idade1)) {
		$pt = 2 * $idade1;
		if($pt < 100) {
			echo "<100 ao multiplicar por 2.<br>";
		} elseif ($pt > 100) {
			echo ">100 ao multiplicar por 2. <br>";
		}
	} else {
		echo "A variável não é numérica. <br>";
	}

	$idade2 = "60";

	if (is_numeric($idade2)) {
		$pt2 = 2 * $idade2;
		if($pt2 < 100) {
			echo "<100 ao multiplicar por 2.<br>";
		} elseif ($pt2 > 100) {
			echo ">100 ao multiplicar por 2. <br>";
		}
	} else {
		echo "A variável não é numérica. <br>";
	}
?>