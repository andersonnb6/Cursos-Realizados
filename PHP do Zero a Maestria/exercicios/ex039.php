<?php

	function maiorQue10($arr) {
		
		$arrResult = [];

		foreach ($arr as $itens => $preco) {
			if ($preco > 10) {
				array_push($arrResult, $itens);
			}
		}
		return $arrResult;
	}


	$arrTeste = [
		'sabão' => 3,
		'prato' => 25,
		'livro' => 59,
		'fone' => 75,
		'lápis' => 5
	];

	print_r(maiorQue10($arrTeste));

?>