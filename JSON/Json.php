<?php

$pessoas = array();

array_push($pessoas, array(

		'nome' => 'Lucas',
		'idade' => '24'	

)) ;
array_push($pessoas, array(

		'nome'  => 'Andre',
		'idade' => '18'
));

echo json_encode($pessoas);

// json_encode() transforma o array em json


echo "<br>";

$json = '[{"nome":"Lucas","idade":"24"},{"nome":"Andre","idade":"18"}]';

$data =	json_decode($json, true);

// json_decode() transforma o json em array


print_r($data);

?>