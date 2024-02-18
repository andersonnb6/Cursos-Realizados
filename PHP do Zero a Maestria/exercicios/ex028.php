<?php
	$i = 4;
	
	while ($i <= 30) {
			
		if ($i == 24) {
			echo "i = $i, saiu do loop.";
			break;
		} else {
			echo "i = $i <br>" ;
		}

		$i += 2;
	}
?>