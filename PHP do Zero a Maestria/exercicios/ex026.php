<?php
	$vel = 120;

	if ($vel < 40) {
		echo "vel correta.<br>";
	} elseif ($vel == 40) {
		echo "Tome cuidado.<br>";
	} elseif ($vel > 40) {
		echo "Você foi multado!";
	}
	echo "<br>";

	$valor = 200;
	$result = $valor - $valor*10/100;
	echo $result;
?>