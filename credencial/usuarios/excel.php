<?php
    include("conexion.php");
    $usuarios = "SELECT * FROM usuarios";
    header("Content-Type: application/vnd.ms-excel; charset=iso-8859-1");
    header("Content-Disposition: attachment; filename=registros.xls");
?>

<table border="1">
    <caption>Registros Obtenidos</caption>
    <tr>
        	<th>Nombre Completo</th>
			<th>Correo electrónico</th>
			<th>Horario</th>
			<th>Participación</th>
    </tr>
    <?php $resultado = mysqli_query($conexion, $usuarios);
    while($row=mysqli_fetch_assoc($resultado)) { ?>
        <tr>
            <td><?php echo $row["nombre"]; ?></td>
			<td><?php echo $row["email"]; ?></td>
			<td><?php echo $row["horario"]; ?></td>					
			<td><?php echo $row["participacion"]; ?></td>
        </tr>
    <?php } mysqli_free_result($resultado); ?>
</table>