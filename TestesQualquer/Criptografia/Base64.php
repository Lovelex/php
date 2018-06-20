<?php
// Base 64 pode ser descriptografada

$senha = base64_encode("SenhaQualquer");
echo $senha;
echo "<br>";
$senha = base64_decode("$senha");
echo $senha;

?>