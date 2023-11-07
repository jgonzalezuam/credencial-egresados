<?php

 
$conexion =  mysqli_connect("localhost", "root", "", "credencial_egresado");
if (!$conexion) {die ('no me pude conectar a la base de datos');}
 

$consulta="SELECT * FROM egresados_multimedia";
$resultado = mysqli_query($conexion, $consulta);
 
echo "
<table border=1  width=100%>
<tr>
<td>titulo</td>
<td>direccion</td>
<td>categoria</td>
<td>comentarios</td>
<td>valoracion</td>
<td></td>
</tr>
";
 
 
while($fila=mysqli_fetch_assoc($resultado))
 
{
 
$titulo2 = $fila['nombre'];
$direccion2=$fila['direccion'];
$categoria2=$fila['categoria'];
$comentarios2=$fila['comentarios'];
$valoracion2=$fila['valoracion'];
 
echo"
<tr>
<form action='actualizarfavorito.php' method='POST'>
<td><input type type='text' name='titulo' value='".$titulo2."'></td>
<td><input type type='text' name='direccion' value='".$direccion2."'></td>
<td><select name='categoria'>
<option value='salud'>Salud</option>
<option value='tecnologia'>Tecnologia</option>
<option value='trabajo'>Trabajo</option>
<option value='amor'>Amor</option></td>
<option value='".$categoria2."' selected>".$categoria2."
</select>
<td><input type type='text' name='comentarios' value='".$comentarios2."'></td>
<td><input type type='text' name='valoracion' value='".$valoracion2."'></td>
<td><input type='submit' value='Editar'></td>
</form>
</tr>
";
}
 
 
 
echo "</table>";
 
 
mysql_close ($conexion);