<?php

header("Content-Type: image/png");

// Header é o tipo de image que será gerado

$image = imagecreate(256, 256);

// imagecreate() - Cria uma imagem com os parametros ALTURA e LARGURA

$black = imagecolorallocate($image, 0, 0, 0);

//  imagecolorallocate() - Cria uma cor para uma imagem no formato RGB (A primeira cor será definida como o FUNDO)  

$red = imagecolorallocate($image, 255, 0, 0);

imagestring($image, 5, 60, 120, "Curso de PHP 7", $red);

// imagestring() - Coloca um texto na imagem com os parâmetros:
// Nome da imagem, Tamanho da fonte, Posição X(Horizontal, Direita-Esquerda), Posição Y(Vertical, Cima-Baixo), Texto que quer escrever, Cor do texto escrito

imagepng($image);

// imagepng() - Define a extensão da imagem e ao mesmo tempo cria ela

imagedestroy($image);

// imagedestroy() - Destroi a imagem para que ela não fique ocupando espaço na memória
        
?>