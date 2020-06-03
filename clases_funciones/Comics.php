<?php

class Comics
{
	public $id;
	public $personaje;
	public $habilidad;
	public $tipo;
	public $compania;
	public $creador;


	function __construct($id,$personaje,$habilidad,$tipo,$compania,$creador)
	{
		$this->id=$id;
		$this->personaje=$personaje;
		$this->habilidad=$habilidad;
		$this->tipo=$tipo;
		$this->compania=$compania;
		$this->creador=$creador;
	}

	public function bando($tipo)
	{
		if($tipo=='malo')
			{echo "lucha contra un heroe";}
		elseif($tipo=='bueno')
			{echo "lucha contra el crimen";}
		elseif($tipo=='antiheroe')
			{echo "todos son sus enemigos";};
	}

}

class Heroe extends Comics
{
	public $frase;
	public $enemigo;

	function __construct($frase,$enemigo)
	{
		$this->frase=$frase;
		$this->enemigo=$enemigo;
	}
}
?>