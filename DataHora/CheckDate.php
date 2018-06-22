<?php

$dia = 22;
$mes = 06;
$ano = 2018;

if (checkdate($mes,$dia,$ano))

	// Verifica de os valores das variaveis batem com a data atual e retorna um valor boleano.

{

    print('Data correta');

}
else
{

    print('Data incorreta');

}

?>