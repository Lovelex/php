<?php 


$pessoa = array(
	"nome" => 'João',
	"idade" => 20
);

foreach ($pessoa as &$value) {
	
	// com referência

	if (gettype($value) === 'integer') $value += 10;
										
	// gettype(variável) verifica o tipo da varável, dependendo do tipo pode ser:
	//"boolean" "integer" "double"->float "string" "array" "object" "resource" "NULL"
	// Se $value for do tipo 'integer', faça $value = $value + 10 

	

	echo $value. "<br>";
	// mostra os VALORES do array
}

echo "<br>";

print_r($pessoa);
// Mostra o ARRAY por completo

echo "<br>";
echo "<br>";
// <=================== Teste do gettype ==============> 

echo gettype(true);
echo "<br>";
echo gettype("teste");
echo "<br>";
echo gettype(12);
echo "<br>";
echo gettype(1.2);
echo "<br>";
echo gettype([1,2]);
echo "<br>";
echo gettype(null);
echo "<br>";
 ?>