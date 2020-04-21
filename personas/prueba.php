<?php
extract($_REQUEST);
include("conexion.php");
extract($_REQUEST);
        $db=new conexion();
        $conex=$db->conectar();

        $sql="SELECT * FROM comic";
        
        $res=mysql_query($conex,$sql);
        $columnas=mysqli_num_fiels($res);
        $filas=mysqli_num_rows($res);
        $i=0;
        $datos[]=array();

        while($data=mysqli_fetch_array($res))
        {
            for($j=0;$j<$columnas;$j++)
            {
                $datos[$i][$j]=$data[$j];
            }
            $i++;
        }
        mysqli_close($conex);

?>


<!DOCTYPE html>
<html>
<head>
    <title>Consulta de COmics</title>
<script type="text/javascript">
    function eliminar(id) 
    {
        if (confirm("Seguro desea eliminar el registro?")) 
            {window.location="funciones.php?operacion=eliminar&id_persona="+id;}
    }
</script>
</head>
<body>
<table align="center">
<a href="index.php">Inicio</a>
    <tr>
        <th>id</th>
        <th>Personaje</th>
        <th>Poder</th>
        <th>Habilidad</th>
        <th>Tipo</th>
        <th>Compañia</th>
        <th>Creador</th>
        <th></th>
    </tr>
    <?php $num=1;
        for ($i=0; $i< $filas;$i++) {
            echo "<tr>";
    ?>
<td><?=$num?></td>
    <?php for ($j=1;$j <$campos; $j++) { ?>
        <td><?=$data[$i][$j]?></td>
<?php } ?>
<td>
   <!-- <a href="funciones.php?operacion=modificar&id_persona=<?=$data[$i][0]?>">Modificar</a>
    <a href="javascript:eliminar(<?=$data[$i][0]?>)">Eliminar</a> -->
</td>
<?php
    $num++;
    }   ?>

</table>
</body>
</html> 