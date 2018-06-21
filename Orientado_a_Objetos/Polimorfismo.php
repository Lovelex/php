<?php 

abstract class Animal{

	public function falar()
	{
		return "Som";
	}

	public function mover()
	{
		return "Anda";
	}

}

class Cachorro extends Animal{

	public function falar()
	{
		return "Late";
	}

}

class Gato extends Animal{


	public function falar()
	{
		return "Mia";
	}

}

class Passaro extends Animal{

	public function falar()
	{
		return "Canta";
	}

	public function mover()
	{
		return "Voa e " . parent::mover();
	}	// (::) serve para chamar o método abstrato mover() da classe pai


}

$piupiu = new Passaro();
echo $piupiu->falar(). "<br>";
echo $piupiu->mover(). "<br>";

echo "<Hr>";

$pluto = new Cachorro();
echo $pluto->falar(). "<br>";
echo $pluto->mover(). "<br>";

echo "<hr>";

$garfield = new Gato();
echo $garfield->falar(). "<br>";
echo $garfield->mover(). "<br>";


?>