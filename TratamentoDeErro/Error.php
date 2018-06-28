<?php

// set_error_handler() - Armazena um erro que não é comumente considerado, para facilitar no tratamento.
// set_error_handler() - Aguarda uma função com parâmetros

function error_handler($code, $message, $file, $line){
    
    // function error_handler($code, $message, $file, $line) - Vai armazenar os parâmetros em Json para a função set_error_handler().
    
    echo json_encode(array(
        
        "code"=>$code,
        "message"=>$message,
        "line"=>$line,
        "file"=>$file
      
    ));
    
}

set_error_handler("error_handler");

// set_error_handler("error_handler") - Armazena um erro ocorrido não identificado empre na mesma ordem de parâmetros:
// 1º - Código do erro, 2° - Nome do erro, 3° - Arquivo do erro 4º - (Opcional) Código do erro 

echo 100 / 0 ;

?>