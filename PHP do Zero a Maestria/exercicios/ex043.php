<?php
	
	$str = 'carro - navio - helicóptero - barco - jangada';
	$arr = explode(" - ", $str);
	print_r($arr);

	foreach ($arr as $item => $value) {
		echo "<br>$value";
	}
	
?>