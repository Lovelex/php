<?php

$comb = array_combine(range(11, 14), range(1, 4));

// array_combine  Cria um array usando um array para chaves e outro para valores

print_r($comb);

echo "<br><br>";

// para usar o echo podemos fazer uma conversão com FOREACH.

foreach ($comb as $key => $value) {
	echo $key. " = " .$value. "  |  ";
}

?>