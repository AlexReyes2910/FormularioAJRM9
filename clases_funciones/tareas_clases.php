<?php

class operaciones{

	public static function suma($num1,$num2)
	{
		$suma=$num1+$num2;
		return $suma;
	}
	public static function multi($num1,$num2)
	{
		$multi=$num1*$num2;
		return $multi;
	}
	public static function divi($num1,$num2)
	{
		$divi=$num1/$num2;
		return $divi;
	}
}

class panes
{
	static function hay_pan($pan)
	{
		if($pan<=0)
		{echo "no hay pan";}else{echo "si hay pan";}
	}

	static function queda_pan($pan)
	{
		if($pan<=0)
		{echo "no queda pan";}else{echo "si queda pan";}
	}

	static function si_no_hay($pan) 
	{
		if($pan<=0)
		{echo "no, ya no hay pan";}else{echo "si, aun hay pan";}
	}
}

class contador
{
	private saludo1()
	{
		return echo "hola mundo";
	}

	protected saludo2()
	{	
		return echo "hola mundo x2";
	}

	public saludocompleto()
	{
		return $this->saludo1();
		return $this->saludo2();
	}

}

$n1=10;
$n2=5;
echo "<br>------------------------OPERACIONES------------------------------";
echo "<br>la Suma de $n1 y $n2 es ".operaciones::suma($n1,$n2);
echo "<br>la Multiplicacion de $n1 y $n2 es ".operaciones::multi($n1,$n2);
echo "<br>la Division de $n1 y $n2 es ".operaciones::divi($n1,$n2);

$hay=3;
echo "<br>------------------------PANES------------------------------";
echo "<br>Hay pan en la cocina?: "; 
echo panes::hay_pan($hay);
echo "<br>Queda  pan en la cocina?: ";
echo panes::queda_pan($hay);
echo "<br>Revisa si no queda pan en la cocina: ";
echo panes::si_no_hay($hay);

echo "<br>------------------------SALUDO------------------------------";
echo contador::saludocompleto();

?>