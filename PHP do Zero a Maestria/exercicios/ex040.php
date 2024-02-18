<?php
	
	$frase = 'O rato roeu a roupa do rei de roma.';

	$total_A = 0;

	for ($i=0; $i < strlen($frase); $i++) { 
		
		if (strtolower($frase[$i]) == 'a') {
			
			$total_A++;

		}
	}

	echo "O total de letras A na frase é $total_A.";

?>