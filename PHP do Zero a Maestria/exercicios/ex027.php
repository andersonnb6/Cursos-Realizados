<?php
	$arr = [
		'anderson', 30, true, false,
		'sabrina', 32, true, false,
		'michel', 13, true, false,
	];
	
	$i = 0;

	while($i < count($arr)) {
		
		if (is_string($arr[$i])) {
			echo "$arr[$i]" . "<br>";
		}
		
		$i++;
	}
?>