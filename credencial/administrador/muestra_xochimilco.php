<?php 
session_start(); 

if (!isset ($_SESSION['emailXoc'])){ 
   header("location: admin_xochimilco.php"); 
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
			<h1>Archivos digitales de la Credencial de Egresada y Egresado UAM</h1>
			<div>
				<a href="salir_xoc.php"><button id="btn_cargar_productos" class="btn active" style="background: #0072CE; color:#ffffff;">Cerrar sesión</button></a>
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
					<th>Matrícula</th>
					<th>Nombre(s) Completo</th>
					<th>RFC</th>
					<th>Unidad Universitaria</th>
					<th>Grado</th>
					<th>Abrev.</th>
					<th>Status</th>
					<th>Código de Barras</th>
					<th>Fotografía</th>
					<th>Firma</th> 
					<th>Estado</th> 					
					<th>Fecha de Tramite</th> 
					<th>Actualizar</th>
					<!--<th>Código QR</th> -->
					<!--<th>Actualizar</th>
					<th>Eliminar</th>-->
				</tr>

                <?php
					   
                       include("conexion.php");

					   $productos= "SELECT id, matricula, nombre, rfc, unidad, nivel, gra, estado, codigo, foto, firma, qr,valida,fec_emision
                        FROM egresados_multimedia 
                        WHERE unidad = 'XOCHIMILCO'";
                ?>

				<?php
					$resultado = mysqli_query($conexion, $productos);
					while($dato=mysqli_fetch_assoc($resultado)){
				?>
                    <tr>
					<td><?php  echo $dato["id"]; ?></td>
					<td><?php  echo $dato["matricula"]; ?></td>
					<td><?php  echo $dato["nombre"]; ?></td>
					<td><?php  echo $dato["rfc"]; ?></td>
					<td><?php  echo $dato["unidad"]; ?></td>
					<td><?php  echo $dato["nivel"]; ?></td>
					<td><?php  echo $dato["gra"]; ?></td>
					<td><?php  echo $dato["estado"]; ?></td>
					<td><img width="80%" height="25px" src="data:image/jpg;base64,<?php echo base64_encode($dato["codigo"]); ?>" alt=""></td>
                    <td><img width="75px" height="75px" src="data:image/jpg;base64,<?php echo base64_encode($dato["foto"]); ?>" alt=""></td>
					<td><img width="75px" height="75px" src="data:image/jpg;base64,<?php echo base64_encode($dato["firma"]); ?>" alt=""></td>
					<!--<td><img width="75px" height="75´x" src="data:image/jpg;base64,<?php //echo base64_encode($dato["qr"]); ?>" alt=""></td>-->
					<td><?php  echo $dato["valida"]; ?></td>
					<td><?php  echo $dato["fec_emision"]; ?></td>
                    <td><a href="editar_registro.php?id=<?php //echo $dato["id"]; ?>"  target="_blank">Editar</a></td>
                    <!--<td><a href="eliminar_registro.php?id=<?php //echo $dato["id"]; ?> " target="_blank">Eliminar</a></td>-->
					
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