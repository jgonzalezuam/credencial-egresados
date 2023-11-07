<?php 
session_start(); 

if (!isset ($_SESSION['emailRec'])){ 
   header("location: admin_rectoria.php"); 
  exit(); 
} 

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
    <title>Credencial de Egresada y Egresado UAM</title>
   <link href="https://file.myfontastic.com/MpHoby8K5sctHF7hQyWiH/icons.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,600" rel="stylesheet"> 
	
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/estilos.css">
	<link rel="stylesheet" href="css/styles.css">
	<link rel="shortcut icon" href="img/variacion1.jpg" type="image/x-icon">
   </head>
<body  oncontextmenu="return false" onkeydown="return false"> 
	<div class="contenedor">
		<header>
			<h5>Archivos digitales de la Credencial de Egresada y Egresado UAM</h5>
			<div>
				
				<a href="muestra.php"><button id="btn_cargar_productos" class="btn active" style="background: #333333; color:#ffffff;">Egresados</button></a>
				<a href="salir_rec.php"><button id="btn_cargar_productos" class="btn active" style="background: #333333; color:#ffffff;">Cerrar sesión</button></a>
				<!--<a href="../login_registro/index_admin.php"><button id="btn_cargar_productos" class="btn active">Regresar</button></a>-->
			</div>
		</header>
		<main>
			<!--<form action="insertar_registro.php" method="POST" id="formulario" class="formulario" enctype="multipart/form-data">
				<input type="text" name="matricula" id="matricula" placeholder="Matricula" required>
				<input type="text" name="nombre" id="nombre" placeholder="Nombre Completo" required>
				<input type="text" name="curp" id="curp" placeholder="CURP" required maxlength="18" style="text-transform:uppercase;"  />
				<input type="text" name="unidad" id="unidad" placeholder="Unidad Universitaria" required>
				<input type="text" name="nivel" id="nivel" placeholder="Lic. / Posgrado" required>
				<input type="file" name="foto"  >
				<button type="submit" class="btn">Agregar</button>
			</form>-->
			<div class="table-responsive">
			<table id="tabla" class="table">
				<tr>
					<th>Folio</th>
					<th>Email</th>
					<th>Sesión activa</th>
					<th>Unidad Universitaria</th>
					<!--<th>Actualizar</th>
					<th>Eliminar</th>-->
				</tr>

                <?php
					   
					   include("conexion.php");
					   $productos= "SELECT * FROM admi_unidades";
                ?>

				<?php
					$resultado = mysqli_query($conexion, $productos);
					while($dato=mysqli_fetch_assoc($resultado)){
				?>
                    <tr>
					<td><?php  echo $dato["id"]; ?></td>
					<td><?php  echo $dato["email"]; ?></td>
					<td><?php  echo $dato["sesion_activa"]; ?></td>
					<td><?php  echo $dato["unidad"]; ?></td>
					
                   <!-- <td><a href="editar_registro.php?id=<?php //echo $dato["id"]; ?>"  target="_blank">Editar</a></td>
                    <td><a href="eliminar_registro.php?id=<?php //echo $dato["id"]; ?> " target="_blank">Eliminar</a></td>-->
					
				</tr>

                <?php
                  } mysqli_free_result($resultado);
                
				?>
							                   
			</table>
			</div>
            
			<div class="loader" id="loader"></div>
		</main>
	</div>
				
</body>
</html>