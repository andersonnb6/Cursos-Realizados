<?php
	function verificarAcesso($idade, $autorizacao){
		if ($idade >= 18 && $autorizacao == true) {
			return "Acesso autorizado";
		} elseif ($idade < 18) {
			return "Acesso negado. Idade mínima requerida: 18 anos";
		} elseif ($idade >= 18 && $autorizacao == false) {
			return "Acesso negado. Autorização necessária";
		}
	}

	echo 10-10%
?>