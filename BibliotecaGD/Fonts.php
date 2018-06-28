<?php

$image = imagecreatefromjpeg("certificado.jpg");

// imagecreatefromjpeg() - Edita uma imagem 

$titleColor = imagecolorallocate($image, 0, 0, 0);
$gray = imagecolorallocate($image, 100, 100, 100);

imagettftext($image, 32, 0, 320, 250, $titleColor, __DIR__.DIRECTORY_SEPARATOR."fonts". DIRECTORY_SEPARATOR ."Bevan".DIRECTORY_SEPARATOR."Bevan-Regular.ttf", "CERTIFICADO");

// Cria um texto com uma font local e ângulagem nos seguintes parâmetros:
// 1° - Nome da imagem criada, 2° - Tamanho da font, 3º - Ângulo da font, 4º - Posição X, 5° - Posição Y, 6° - Cor da font, 7° - Localização de font, 8º - Texto escrito.

imagettftext($image, 32, 0, 375, 350, $titleColor, __DIR__.DIRECTORY_SEPARATOR."fonts".DIRECTORY_SEPARATOR."Playball".DIRECTORY_SEPARATOR."Playball-Regular.ttf", "Divanei Aparecido");
imagestring($image, 3, 440, 370, utf8_decode("Concluído em: "). date("d/w/Y"), $titleColor);

// utf8_decode() decodifica uma string para o padrão UTF-8

header("Content-type: image/jpeg");

imagejpeg($image);
// imagejpeg($image, "certificado-". date("Y-m-d").".jpg"); Essa linha GERA um arquivo JPEG ao invés de mostrar na tela

imagedestroy($image);

?>