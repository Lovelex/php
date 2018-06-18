<?php 

session_start();

session_destroy();

echo $_SESSION["nome"];

 ?>