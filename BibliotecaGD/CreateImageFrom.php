<?php

$image = imagecreatefromjpeg("certificado.jpg");

// imagecreatefromjpeg() - Edita uma imagem 

$titleColor = imagecolorallocate($image, 0, 0, 0);
$gray = imagecolorallocate($image, 100, 100, 100);

imagestring($image, 5, 450, 150, "CERTIFICADO", $titleColor);
imagestring($image, 5, 440, 350, "Divanei Aparecido", $titleColor);
imagestring($image, 3, 440, 370, utf8_decode("Concluído em: "). date("d/w/Y"), $titleColor);

// utf8_decode() decodifica uma string para o padrão UTF-8

header("Content-type: image/jpeg");

imagejpeg($image);
// imagejpeg($image, "certificado-". date("Y-m-d").".jpg"); Essa linha GERA um arquivo JPEG ao invés de mostrar na tela

imagedestroy($image);

?>