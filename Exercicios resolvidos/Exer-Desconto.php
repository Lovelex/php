<?php

$valorProduto = 14500;
$desconto = 5;

// 5% para compras acima de 10000

if ($valorProduto > 10000) {
	$valorProduto = $valorProduto - ($valorProduto * ($desconto / 100));
	echo "Valor com desconto: ".$valorProduto;
} else{
	echo "Valor sem desconto: ". $valorProduto;
}


?>