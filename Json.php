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

echo "<br>";

$json = '[{"nome":"Lucas","idade":"24"},{"nome":"Andre","idade":"18"}]';

$data =	json_decode($json, true);

print_r($data);

?>