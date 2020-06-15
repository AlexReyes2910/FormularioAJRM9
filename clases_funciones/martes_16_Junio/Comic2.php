<?php

class Comic2
{
	protected $id;
	protected $personaje;
	protected $poder;
	protected $habilidad;
	public $tipo;
	protected $compania;
	protected $creador;

	private function empresa($compania)
	{
		if($compania=='MARVEL')
			{echo "Asociado con Disney y otras grandes empresas";}
		elseif($compania=="DC")
			{echo "Asociado a Warner Broders Entertaiment";};
	}
}

class inclinacion extends Comic2
{
	
	public function bando($tipo)
	{
		if($tipo=='malo')
		{echo "El tipo es un villano";}
		elseif($tipo=='bueno')
		{echo "Tu Heroe es un Bonachon";}
		elseif($tipo=='Antiheroe')
		{echo "Hace lo que le plasca";}

	}
}

class impreso extends Comic2
{

	public function imprimir($id,$personaje,$poder,$habilidad,$tipo,$compania,$creador)
	{
		echo "$id<br>";
		echo "$personaje<br>";
		echo "$poder<br>";
		echo "$habilidad<br>";
		echo "$tipo<br>";
		echo "$compania<br>";
		echo "$creador<br>";

	}
	
}