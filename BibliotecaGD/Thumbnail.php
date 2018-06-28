<?php

header("Content-type: image/jpeg");

$file = "wallpaper.jpg";

$new_width = 256;
$new_height = 256;

list($old_width, $old_height) = getimagesize($file);

// getimagesize() - gera em array descrições do arquivo selecionado, no nosso caso de importancia, pegando a altura e largura da imagem.
// list() - cria variáveis com o valor dos arrays de getimagesize(), nesse caso $old_width pega o valor da chave [0] e $old_height pega o valor da chave [1] na ordem.

$new_image = imagecreatetruecolor($new_height, $new_width);

// imagecreatetruecolor() - Gera uma imagem com todas as cores disponíveis e no tamanho especificado

$old_image = imagecreatefromjpeg($file);

imagecopyresampled($new_image, $old_image, 0, 0, 0, 0, $new_width, $new_height, $old_width, $old_height);


// imagecopyresampled() - faz a transformação entre as duas imagens, nesse caso diminuindo o tamanho da imagem original para w256 h256. Requer os seguintes parâmetros:
// 1° - Nova imagem,, 2° - imagem de Origem 3° - Recorte imagem Origem posição X, 4° -  Recorte imagem Origem posição Y, 5° -  Recorte imagem Nova posição Y, 
// 6° - Recorte imagem Nova posição X, 7° - Largura imagem Origem, 8° - Largura imagem Nova, 9° - Largura imagem Origem, 10° -  Altura imagem Origem 

imagejpeg($new_image);

imagedestroy($old_image);
imagedestroy($new_image);

?>