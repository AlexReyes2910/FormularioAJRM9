<?php
include 'Comic2.php';

echo "<h3>Herencia de Comic 2<br>";

$mostrar=new impreso();
echo $mostrar->imprimir('01','Deadpool','Regeneracion','Mercenario','Antiherioe','Marvel','no se');

echo "<br><hr>Inclunacion Justiciera<br><br>";

$fama=new inclinacion();
echo $fama->bando('Antiheroe');