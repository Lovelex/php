<?php  

$pessoas = array();

array_push($pessoas, array(

		'nome' => 'Lucas',
		'idade' => '24'	

)) ;

// array_push "empurra" um bloco de informações no final de um array
// 

array_push($pessoas, array(

		'nome'  => 'André',
		'idade' => '18'
));


$json = json_encode($pessoas);

echo $json;

?>