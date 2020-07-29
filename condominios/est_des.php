<?php
include('conexion.php');
extract($_REQUEST);
$db=new conexion();
$conex=$db->conectar();
?>


<!DOCTYPE html>
<html>
<head>
	<title>Estacionamiento y Desocupadas</title>
</head>
<body>

	<br><a href="index.php">Volver</a><br>

	<table align="center">
		<tr align="center">
			<th colspan="6" bgcolor="silver">Casas con Estacionamiento y Desocupadas</th>
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
 			$sql="SELECT * FROM inmuebles WHERE estacionamiento='Si' AND status='Desocupado'";
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
 		<?php } ?>
 		</tr>
	</table>
<hr>
		<table align="center">
		<tr align="center">
			<th colspan="6" bgcolor="silver">Casas Sin Estacionamiento y Desocupadas</th>
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
 			$sql="SELECT * FROM inmuebles WHERE estacionamiento='No' AND status='Desocupado'";
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
 		<?php } ?>
 		</tr>
	</table>

<hr>
		<table align="center">
		<tr align="center">
			<th colspan="6" bgcolor="silver">Conteo de Casas</th>
		</tr>
		<tr align="center">
			<td>Con estacionamiento</td>
			<td>Sin estacionamiento</td>
			<td>Ocupadas</td>
			<td>Desocupadas</td>
		</tr>
		<?php 
 			$sql="SELECT 
 			count(CASE WHEN estacionamiento='Si' then 1 end),
 			count(CASE WHEN estacionamiento='No' then 1 end),
 			count(CASE WHEN status='ocupado' then 1 end),
 			count(CASE WHEN status='desocupado' then 1 end)
 			FROM inmuebles";
 			$res=mysqli_query($conex,$sql);
 			$conteo=mysqli_fetch_array($res);
 			
 		?>
 		<tr align="center">
 			<td><?php echo $conteo[0]?></td>
 			<td><?php echo $conteo[1]?></td>
 			<td><?php echo $conteo[2]?></td>
 			<td><?php echo $conteo[3]?></td>
 		</tr>
 		</tr>
	</table>


</body>
</html>