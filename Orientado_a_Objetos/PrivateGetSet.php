<?php

class carro{

	private $modelo;
	private $motor;
	private $ano;

	function exibir(){
		return array(
			"modelo" => $this->getModelo(),
			"motor" => $this->getMotor(),
			"ano" => $this->getAno()
		);
	}


	function getModelo(){
		return $this->modelo;
	}
	function setModelo($modelo){
		$this->modelo = $modelo;
	}

	function getMotor():float{
		return $this->motor;
	}
	function setMotor($motor){
		$this->motor = $motor;
	}

	function getAno():int{
		return $this->ano;
	}
	function setAno($ano){
		$this->ano = $ano;
	}

}

$gol = new Carro();
$gol->setModelo("Gol GT");
$gol->setMotor("1.6");
$gol->setAno("2017");

var_dump($gol->exibir());
?>