<?php

	function soma(int ...$valores):string{
		//INT - mostra que suas variáveis serão do tipo int convertendo as mesmas para tal.
		//(...) - determina que você vai usar 2 ou mais parâmetros.
		// :STRING - faz com que o return, seja do tipo string.

		return array_sum($valores);

	}

	echo var_dump(soma(2, 2));
	echo "<br>";
	echo var_dump(soma(25, 33));
	echo "<br>";
	echo var_dump(soma(1.5, 3.2));
	echo "<br>";

 ?>