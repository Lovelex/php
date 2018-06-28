<?php 

$name = "deletar";

if (!is_dir($name)){

	// is_dir verifica se existe o diretorio e retorna um valor boleano

	mkdir($name);
	echo "Diretorio $name criado com sucesso";
        
	// Cria um diretorio 
} else {
	echo "Ja existe o diretorio: $name";
}

 ?>