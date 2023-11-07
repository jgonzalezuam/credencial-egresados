<?php session_start();

// Comprobamos tenga sesion, si no entonces redirigimos y MATAMOS LA EJECUCION DE LA PAGINA.
if (isset($_SESSION['usuario'])) {
} else {
	header('Location: login.php');
	die();
}

?>

<?php

include("../conexion_1.php");
$sentencia = $db->query("SELECT * FROM egresados_multimedia;");
$personas = $sentencia->fetchAll(PDO::FETCH_OBJ);
?>
<!--Recordemos que podemos intercambiar HTML y PHP como queramos-->
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Tabla de ejemplo</title>
	<style>
	table, th, td {
	    border: 1px solid black;
	}
	</style>
</head>
<body>

	<a href="muestra_acceso.php" target="_blank"><button id="btn_cargar_productos" class="btn active" style="background: #333333; color:#ffffff;">Registro de accesos</button></a>
				<a href="cerrar.php"><button id="btn_cargar_productos" class="btn active" style="background: #333333; color:#ffffff;">Cerrar sesión</button></a>
	<table>
		<thead>
			<tr>
				<th>Folio</th>
                <th>Matricula</th>
				<th>Nombre</th>
				<th>RFC</th>
				<th>Unidad</th>
				<th>Fecha de Emisión</th>
				<th>Status</th>
                <th>Información completa </th>
				<th>Editar</th>

				<!--<th>Eliminar</th>-->
			</tr>
		</thead>
		<tbody>
			<!--
				Atención aquí, sólo esto cambiará
				Pd: no ignores las llaves de inicio y cierre {}
			-->
			<?php foreach($personas as $persona){ ?>
			<tr>
				<td><?php echo $persona->id ?></td>
				<td><?php echo $persona->matricula ?></td>
				<td><?php echo $persona->nombre ?></td>
				<td><?php echo $persona->rfc ?></td>
				<td><?php echo $persona->unidad ?></td>                
				<td><?php echo $persona->fec_emision ?></td>
				<td><?php echo $persona->valida ?></td>
                <td><a href="<?php echo "buscar_informacion.php?matricula=" . $persona->matricula?>" target="_blank"><button id="btn_cargar_productos" class="btn active" style="background: #333333; color:#ffffff;" >Ver</button></a></td>
				<td><a href="<?php echo "editar.php?id=" . $persona->id?>">Editar</a></td>
				<!--td><a href="<?php //echo "eliminar.php?id=" . $persona->id?>">Eliminar</a></td>-->
			</tr>
			<?php } ?>
		</tbody>
	</table>
</body>
</html>