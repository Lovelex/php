<?php

class Dado{

	public $num;

	function lançarDado(){

		echo $num = random_int(1, 6);

	}

}

$dado = Dado::lançarDado();


?>