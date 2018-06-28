<?php

$nome = "deletar";

if (is_dir($nome)) {

    rmdir($nome);
    echo "Diretorio $nome removido com sucesso";
    
} else {

    echo "Não existe o diretorio $nome";
    
}

?>