<?php  
// Pegando o Timestamp da data
// $ts = strtotime("2012-01-11");

$ts = strtotime("now +1 month +1 day +1 week +1 second");


echo date("l, d/m/Y", $ts);

echo "<br>";

echo $ts;

?>