<?php
include('conexion.php');
extract($_REQUEST);
$db=new conexion();
$conex=$db->conectar();

$sql="CREATE TABLE inmuebles (id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT, idem varchar(50) NOT NULL, estacionamiento enum('Si','No'), status enum('Ocupado','Desocupado','Mantenimiento'), tipo enum('Casa','Apartamento','Chalet','Quinta','Otro'), cod_postal varchar(5))";

$result=mysqli_query($conex,$sql);

if($result)
{
	echo 'Tabla Creada';
	$sql="ALTER TABLE inmuebles ADD UNIQUE (idem)";
	$result=mysqli_query($conex,$sql);
	if($result)
	{
		echo ' y se logro asingar el atributo UNIQUE al campo idem';
	}else{
		echo ' aunque no se logro asingar el atributo UNIQUE al campo idem';
	}
}else{
	echo 'No se pudo crear la tabla o ya existe';
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Inmobiliarios</title>
</head>
<body>
	<h3></h3>
	<br><a href="add.php">Ingresar Registros</a><br>
	<br><a href="Consulta.php">Consulta General</a><br>
	<br><a href="est_des.php">Estacionamiento y Estatus</a><br>


</body>
</html>