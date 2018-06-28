<?php

$nome = "images";

$data = array();

if (is_dir($nome)) {
    
    $dir = scandir($nome);
    
    // scandir() Mostra os arquivos que estão dentro de uma pasta incluindo outras pastas
    
    foreach ($dir as $img) {
        if (!in_array($img, array(".",".."))) {
            
            // !in_array() NÃO MOSTRA os arquivos "." e ".."
            
            $filename = $nome . DIRECTORY_SEPARATOR . $img;
            
            //$filename =  images/NomeDoArquivo
            
            $info = pathinfo($filename);
            
            // patchinfo() Retorna em array Nome do diretorio, Nome do arquivo e a Extensão.
            
            $info["size"] = filesize($filename);
            
            // filesize() retorna o tamanho do arquivo em BYTES.
            
            $info["modified"] = date("d/m/Y H:i:s", filemtime($filename));
            
            // date("d/m/Y H:i:s", filemtime($filename)) Retorna a data ehora de modificação de um arquivo.
            
            $info["url"] = "http://127.0.0.1/Udemy/php/ManipulaçãoDiretorios/".str_replace("\\", "/", $filename);
            
            // str_replace("\\", "/", $filename) muda de barra invertida "\" para barra "/" em $filename (deve se usar duas barras)
            
            array_push($data, $info);
            
        }
    }
    
} else {
    
    echo "Diretorio não encontrado";
    
}

echo json_encode($data);

?>
