<?php

function trataNome($name){
    
    // função trataNome() - verifica se um nome NÃO foi informado
    
    if  (!$name){
        
        throw new Exception("Nenhum nome foi informado", 1);
        
        // Se um nome NÃO for informado gera um erro com o código "1".
        
    }
    
    echo ucfirst($name). "<br>" ;
 
    // ucfirst - faz a primeira letra da String maiúscula
    
}

try {
    
    // Try tenta executar a FUNÇÃO trataNome(), se não for definido um parâmetro retorna um erro
    
    trataNome("joao");
    trataNome("");
    
} catch (Exception $e) {
    
    echo $e->getMessage();
    
} finally {
    
    // Finally{ } - é um bloco opcional, ele será executado INDEPENDENTE do resultado de TRY e CATCH
    
    echo "<br> Executou o Try!";
    
}

?>