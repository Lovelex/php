<?php

	$a = 10;
	

	function trocaValor(&$b){
		$b += 50;
		return $b;
	}
 
	echo trocaValor($a). " Echo direto na Função trocaValor()" ;
	echo "<br>";
	echo $a. ' Echo direto na variável $a';
	// O valor da variável muda por causa do '&'.
	// Todo valor ganho da função trocaValor() será também transmitido
	// por $a, o nome disso é:
	// & Passagem de parâmetro por referência.


 ?>