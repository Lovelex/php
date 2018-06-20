<?php

/* Teve um problema na empresa do joãozinho. Os números ficaram loucos!
	O número 1 e o 2 estão perdidos por aí! 

	* Faça um código que quando alguma variável for VERDADEiRA mostre o número 2 na tela
	* Quando for FALSO, apareça 1 na tela.
	* Use IF, ELESE.

	*Bonus - faça com Switch TAMBÉM e mostre os dois resultados na mesma tela, tanto com if e switch!
	*Bonus 2 - no switch faça com que se eu não informar valor, por padrão apareça 2 ENQUANTO no IF continue mostrando 1 ou 2 simultaneamente.
*/


	$v = true;

		if ($v == true) {
			echo 2;
		} else {
			echo 1;
		}
	
		echo "<br>";
		
	switch ($v) {
		case false:
			echo 1;
			break;
		
		case true:
			echo 2;
			break;
		
		default :
			echo 2;
			break;
	}


?>