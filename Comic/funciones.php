<?php
include("conexion.php");
extract($_REQUEST);

class funcioneslista
{
	public function guardar()
	{
	extract($_REQUEST);
	$db=new conexion();
	$con=$db->conectar();
	$sql="INSERT INTO comic VALUES(NULL,'".$personaje."','".$poder."','".$habilidades."','".$tipo."','".$compania."','".$creador."')";
	$resultado=mysqli_query($con,$sql);
	if ($resultado)
		 {
			?>
			<script type="text/javascript">
				alert("Comic Registrado");
				window.location="index.php";
			</script>
			<?php
		}else{
			?>
			<script type="text/javascript">
				alert("Error al registrar el Comic");
				window.location="index.php";
			</script>
			<?php
			}
	}

	public function modificar()
	{
		extract($_REQUEST);
        $db=new conexion();
        $conex=$db->conectar();
        $sql="SELECT * FROM comic WHERE id=".$id_comic."";
		$res=mysqli_query($conex,$sql);
        $data=mysqli_fetch_array($res);

        header("Location: prueba.php?data=".serialize($data));
	}

	public function actualizar(){
        extract($_REQUEST);
        $db=new conexion();
        $conex=$db->conectar();

        $sql="UPDATE comic set personaje='$personaje', poder='$poder', habilidades='$habilidades', tipo='$tipo', compania='$compania', creador='$creador'  WHERE id=$id_comic";
       	$res=mysqli_query($conex,$sql);
        	if ($res) {
        		?>
        		<script>
        			alert("REGISTRO MODIFICADO");
        			window.location="mostrarregistro.php";
        		</script>
        		<?php
        	}else{
        		?>
        		<script>
        			alert("ERROR AL MODIFICAR REGISTRO");
        			window.location="mostrarregistro.php";
        		</script>
        		<?php
        	}
    }


	public function eliminar()
	{
		extract($_REQUEST);
		$db=new conexion();
		$conex=$db->conectar();

		$sql="DELETE FROM comic WHERE id=".$id_comic;
		$res=mysqli_query($conex,$sql);
		if($res)
		{
			?>
			<script type="text/javascript">
				alert("Registro de Comic Eliminado");
				window.location="mostrarregistro.php";
			</script>
			<?php
		}else{
			?>
			<script type="text/javascript">
				alert("Error al eliminar Registro");
				window.location="mostrarregistro.php";
			</script>
			<?php

			} 

		}



	static function controlador($operacion){
		$comic=new funcioneslista();
		switch ($operacion) {
			case 'guardar':
				$comic->guardar();
				break;
			case 'modificar':
				$comic->modificar();
				break;
			case 'actualizar':
				$comic->actualizar();
				break;
			case 'eliminar':
				$comic->eliminar();
				break;
			default:
				?>
					<script>
						alert("No existe la ruta");
						window.location="funciones.php?operacion=index.php";
					</script>
				<?php
				break;
		}//switch
	}//funcion controlador
}//class
funcioneslista::controlador($operacion);
?>