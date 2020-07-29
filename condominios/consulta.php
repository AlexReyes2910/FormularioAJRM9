<?php
include('conexion.php');
extract($_REQUEST);
$db=new conexion();
$conex=$db->conectar();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Inmuebles</title>
</head>
<body>
	<br><a href="index.php">Volver</a><br>
	
	<br><a href="add.php">Ingresar Registros</a><br>
	<table align="center">
		<tr align="center">
			<th colspan="6" bgcolor="silver">Datos de Registro</th>
		</tr>
		<tr align="center">
			<td>ID</td>
			<td>Identificacion</td>
			<td>Estacionamiento</td>
			<td>Estatus</td>
			<td>Tipo</td>
			<td>Codigo Postal</td>
		</tr>
		<?php 
 			$sql="SELECT * FROM inmuebles";
 			$res=mysqli_query($conex,$sql);
 			while($reg=mysqli_fetch_array($res))
 			{
 		?>
 		<tr align="center">
 		<td bgcolor="orange"><?php echo $reg['id']; ?></td>
 		<td><?php echo $reg['idem']; ?></td>
 		<td><?php echo $reg['estacionamiento']; ?></td>
 		<td><?php echo $reg['status']; ?></td>
 		<td><?php echo $reg['tipo']; ?></td>
 		<td><?php echo $reg['cod_postal']; ?></td>
 		</tr>
 		<?php }  ?>
 		</tr>
	</table>
</body>
</html>
<?php
mysqli_close($conex);
?>
