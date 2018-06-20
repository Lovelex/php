<?php 

$dt = new DateTime();

$periodo = new DateInterval("P15D");
// P-Para dizer um dia/mes/ano. T-para dizer hora/minuto/segundo
// PTM == Minutos | PM == Meses 

echo $dt->format("d/m/Y H:i:s");

$dt-> add($periodo);

echo "<br>";

echo $dt->format("d/m/Y H:i:s");

 ?>