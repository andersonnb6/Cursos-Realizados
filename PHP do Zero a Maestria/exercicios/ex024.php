<?php
	$nome = "Anderson";

	if (is_string($nome)) {
		echo "É uma string.<br>";
	} else {
		echo "Não é uma string.<br>";
	}
	if (is_int($nome)) {
		echo "É um inteiro.<br>";
	} else {
		echo "Não é um inteiro.<br>";
	}
	if (is_bool($nome)) {
		echo "É um booleano.<br>";
	} else {
		echo "Não é um booleano.<br>";
	}
?>