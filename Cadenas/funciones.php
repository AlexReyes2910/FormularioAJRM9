<?php
echo "<---------------------Funciones de Strings--------------------------><br>";


$var=1.23456789;
$ejercicio1=(string)round($var,7);
$ejercicio2=(string)round($var,1);
$ejercicio3=(string)round($var,5);
echo "<br>1) establecer limite en la cantidad de decimales con ROUND, redondea el ultimo numero<br>";
echo "a) $var= <b>$ejercicio1 (7)</b><br>";
echo "b) $var= <b>$ejercicio2 (1)</b><br>";
echo "c) $var= <b>$ejercicio3 (5)</b><br>";


$var1=7.8;
$var2=1.4;
$var3=-27.8;
$ejercicio1=floor($var1);
$ejercicio2=floor($var2);
$ejercicio3=floor($var3);
echo "<br>2) ahora toca FLOOR, redondea los valores con decimales hacia el valor exacto menor<br>";
echo "a) $var1= <b>$ejercicio1</b><br>";
echo "b) $var2= <b>$ejercicio2</b><br>";
echo "c) $var3= <b>$ejercicio3</b><br>";


$var1=5.6;
$var2=-3.4;
$var3=0.1;
$ejercicio1=ceil($var1);
$ejercicio2=ceil($var2);
$ejercicio3=ceil($var3);
echo "<br>3) seguimos con CEIL, redondea los valores con decimales hacia el valor exacto mayor<br>";
echo "a) $var1= <b>$ejercicio1</b><br>";
echo "b) $var2= <b>$ejercicio2</b><br>";
echo "c) $var3= <b>$ejercicio3</b><br>";


$var1=1;
$var2=10;
$var3=100;
$ejercicio1=rand($var1,$var3);
$ejercicio2=rand($var1,-$var2);
$ejercicio3=rand(-$var2,$var2);
echo "<br>4) continua RAND, este nos genera numeros aleatorios dentro de los valores establecidos<br>";
echo "a) valor entre $var1 y $var3= <b>$ejercicio1</b><br>";
echo "b) valor entre $var1 y -$var2= <b>$ejercicio2</b><br>";
echo "c) valor entre -$var2 y $var2= <b>$ejercicio3</b><br>";


$var1='alexander reyes';
$var2='minuscula';
$var3='total';
$ejercicio1=strtoupper($var1);
$ejercicio2=strtoupper($var2);
$ejercicio3=strtoupper($var3);
echo "<br>5) Prosigue STRTOUPPER,convierte letras a mayuscula<br>";
echo "a) originalmente es $var1 y cambia a <b>$ejercicio1</b><br>";
echo "b) originalmente es $var2 y cambia a <b>$ejercicio2</b><br>";
echo "c) originalmente es $var3 y cambia a <b>$ejercicio3</b><br>";


$var1='EJERCICIO';
$var2='MINUSCULA';
$var3='PALABROTA';
$ejercicio1=strtolower($var1);
$ejercicio2=strtolower($var2);
$ejercicio3=strtolower($var3);
echo "<br>6) siguiendo con STRTOLOWER,convierte letras a minusculas por el contrario a la anterior<br>";
echo "a) originalmente es $var1 y cambia a <b>$ejercicio1</b><br>";
echo "b) originalmente es $var2 y cambia a <b>$ejercicio2</b><br>";
echo "c) originalmente es $var3 y cambia a <b>$ejercicio3</b><br>";


$var1='alexander reyes';
$var2='atencion';
$var3='prueba';
$ejercicio1=ucfirst($var1);
$ejercicio2=ucfirst($var2);
$ejercicio3=ucfirst($var3);
echo "<br>7) con UCFIRST convertimos solo la primera letra de la cadena en mayuscula<br>";
echo "a) $var1 cambia a <b>$ejercicio1</b><br>";
echo "b) $var2 cambia a <b>$ejercicio2</b><br>";
echo "c) $var2 cambia a <b>$ejercicio3</b><br>";


$var1='alexander reyes';
$var2='atencion esto es una prueba';
$var3='prueba realizada con exito';
$ejercicio1=ucwords($var1);
$ejercicio2=ucwords($var2);
$ejercicio3=ucwords($var3);
echo "<br>8) UCWORDS sirve para hacer mayusculas las iniciales de cada palabra en la cadena <br>";
echo "a) $var1 cambia a <b>$ejercicio1</b><br>";
echo "b) $var2 cambia a <b>$ejercicio2</b><br>";
echo "c) $var3 cambia a <b>$ejercicio3</b><br>";


$var1='alexander reyes';
$var2='atencion esto es una prueba';
$var3='prueba realizada con exito';
$ejercicio1=strlen($var1);
$ejercicio2=strlen($var2);
$ejercicio3=strlen($var3);
echo "<br>9) prosiguiendo con STRLEN, sirve para contar la cantidad de caracteres en la cadena<br>";
echo "a) $var1 tiene: <b>$ejercicio1</b> caracteres en totoal<br>";
echo "b) $var2 tiene: <b>$ejercicio2</b> caracteres en totoal<br>";
echo "c) $var3 tiene: <b>$ejercicio3</b> caracteres en totoal<br>";


$var1='alexander';
$var2='1000';
$var3=array('a','e','i','o','u');
echo "<br>10) en VAR_DUMP muestra datos de las variables como: arreglo, direccion, contenido, talla y longitud <br>";
var_dump($var1);
var_dump($var2);
var_dump($var3);


$var1=array(1,2,3,4,5,6,7,8,9,0);
$var2=array('frase de palabras','segunda','tercera');
$var3=array('a','e','i','o','u');
echo "<br>11) el COUNT sirve para contar el total de elementos/objetos dentro de un array<br>";
echo "a) la cantidad de objetos en el arreglo 1 es: ".count($var1);
echo "<br>b) la cantidad de objetos en el arreglo 2 es: ".count($var2);
echo "<br>c) la cantidad de objetos en el arreglo 3 es: ".count($var3);


echo "<br><br>12) EXPLODE convierte una cadena en array usando un elemento para separar valores<br>";
$var1='agua que has de tomar';
$var2="a,e,i,o,u";
$var3="papaya";
$ejer1=explode(' ',$var1);
$ejer2=explode(',',$var2);
$ejer3=explode('a',$var3);
echo "a) conviertio la cadena <b>$var1</b> en arreglo eliminando los espacios, ejemplo arreglo 0 y 4: ".$ejer1[0].$ejer1[4];
echo "<br>b) ahora se separa <b>$var2</b> por las comas: ".$ejer2[0].$ejer2[1].$ejer2[2].$ejer2[3].$ejer2[4];
echo "<br>c) por ultimo <b>$var3</b> usando las vocales: ".$ejer3[0].$ejer3[1].$ejer3[2];


echo "<br><br>13) IMPLODE por el caso contrario convierte un array en cadena usando un elemento como separacion entre valores<br>";
$var1=array('agua','para','tomar');
$var2=array('probando','otros','caracteres','para','el','arreglo');
$var3=array('1','2','3','4');
$ejercicio1=implode(" ",$var1);
$ejercicio2=implode("_",$var2);
$ejercicio3=implode(",",$var3);
echo "a) se convirtio a la cadena: ".$ejercicio1;
echo "<br>b) se convirtio a la cadena: ".$ejercicio2;
echo "<br>c) se convirtio a la cadena: ".$ejercicio3;

?>
