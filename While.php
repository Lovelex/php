<?php


	$r = true;
	while ($r) {
		
		$numero = rand(1, 10);

		if ($numero === 3) {
			
			echo "TRÊS";
			$r = false;
		}

		echo $numero . " ";

	}



?>