<?php

// $file = fopen("log.txt", "w+"); 

// fopen abre o arquivo , "w+" coloca o ponteiro do arquivo no começo do arquivo, se ele não existir o cria

$file = fopen("log.txt", "a+");

// fopen abre o arquivo , "a+" coloca o ponteiro do arquivo no final do arquivo, se ele não existir o cria

fwrite($file, date("Y-m-d H:i:s") . "\r\n");

// contrabarra "r" e contrabarra "n" pulam uma linha (comandos html não funcionam)

fclose($file);

echo "Arquivo criado com sucesso";