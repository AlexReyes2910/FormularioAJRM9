<?php
	echo "<----------Suma de dos numeros---------------><br>";

$a=3;
$b=6;
$suma=$a+$b;
echo $suma;
?>

<?php
	echo "<br><br><----------Uniendo Palabras---------------><br>";

	$pal1="probando";
	$pal2="strig";
	$pal3="php";
	$string=$pal1."-".$pal2."-".$pal3;
	echo "$string";
?>

<?php
	echo "<br><br><----------Cortando Palabras (3 letras antes y 5 despues)---------------><br>";

	$frase="Probando strings en php";
	$cortada=substr($frase,3,-5);

echo "frase completa es: $frase<br>";
echo "la frace cortada es: $cortada<br>";
?>

<?php
	echo "<br><br><----------Cortando Palabras (ultimos 10 caracteres)---------------><br>";

	$frase="Probando strings en php";
	$cortada=substr($frase,-10);

echo "frase completa es: $frase<br>";
echo "la frace cortada es: $cortada<br>";
?>

<?php
	echo "<br><br><----------Cortando Palabras (quitar los 5 primeros y mostrar los 10 caracteres siguientes)---------------><br>";

	$frase="Probando strings en php, para entregar la tarea";
	$cortada=substr($frase,5,-10);

echo "frase completa es: $frase<br>";
echo "la frace cortada es: $cortada<br>";
?>