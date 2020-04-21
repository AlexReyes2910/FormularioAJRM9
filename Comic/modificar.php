<?php
extract($_REQUEST);
$data=unserialize($data);
?>
<!Doctype html>
<html>
<head>
<title>Registro de Comics
</title>
<link rel="stylesheet" type="text/css" href="tablas.css">
</head>
<body>
<a href="index.php"><input type="button" value="Volver" class="boton"></a>
<br><br><br><center>
    <form method="post" action="funciones.php">
        <table>
            <tr>
                <th> Registro de Comics</th>
            </tr>
            <tr>
                <td>
                    <input type="text" id="personaje" placeholder="Nombre del Personaje" name="personaje" class="cuadros" value="<?=$data[1]?>">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="text" id="poder" placeholder="Poder" name="poder" class="cuadros" value="<?=$data[2]?>">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="text" id="habilidades" placeholder="Habilidad" name="habilidades" class="cuadros" value="<?=$data[3]?>">
                </td>
            </tr>
            <tr>
                <td>
                    <select name="tipo" class="cuadros" required>
                        <option selected disable><?=$data[4]?></option>
                        <option id="<?=$data[4]?>" value="Bueno" name="">Bueno</option>
                        <option id="<?=$data[4]?>" value="Malo" name="">Malo</option>
                        <option id="<?=$data[4]?>" value="Antiheroe" name="">Antiheroe</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="text" id="compania" placeholder="Compania" name="compania" class="cuadros" value="<?=$data[5]?>">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="tex" id="creador" placeholder="Creador" name="creador" class="cuadros" value="<?=$data[6]?>">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="hidden" name="id_comic"value="<?=$data[0]?>">
                    <input type="hidden" name="operacion"value="actualizar">
                    <input type="submit" name="enviar" value="Modificar" class="boton">
                </td>
            </tr>
        </table>
    </form>
</center>
</body>
</html>
