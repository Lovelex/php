<?php

try {
    
   // TryCatch servem para "tratar" erros, Try tenta executar algo e se der erro, catch captura detalhes do erro
    
    throw new Exception("Houve um erro.", 400);
    
   //  throw new Exception() - Lança um erro como exemplo. 
    
} catch (Exception $e) {
    
    echo json_encode(array(
        
        "message"=>$e->getMessage(),
        
        // getMessage() - Mostra o nome do erro
        
        "line"=>$e->getLine(),
        
        // getLine() - Mostra a linha onde ocorre o erro no editor
        
        "file"=>$e->getFile(),
        
        // getFile() - Mostra o arquivo que deu o erro
        
        "code"=>$e->getCode()
            
        // getCode() - se tiver, mostra o número do erro    
            
    ));
    
}


?>