<?php
include 'Comics.php';

echo "Probando Herencia<br>";

$mostrarheroe=new Heroe('Soy Batman','Guason');
echo $mostrarheroe->bando('antiheroe');
?>