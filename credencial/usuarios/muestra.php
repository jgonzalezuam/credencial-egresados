
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
    <title>Registros Obtenidos</title>
   <link href="https://file.myfontastic.com/MpHoby8K5sctHF7hQyWiH/icons.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,600" rel="stylesheet"> 
	<link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/estilos.css">
	<link rel="stylesheet" href="../css/styles.css">
	<link rel="shortcut icon" href="img/variacion1.jpg" type="image/x-icon">
   </head>
<body  oncontextmenu="return false" onkeydown="return false"> 
	<div class="contenedor">
		<header>
			<div>
				<h3 class="text-center p-3 col-12">Registros obtenidos</h3>
			<center>	<a href="excel.php" class="col-6 btn-dark text-center">Generar Excel</a></center><br>
				<!--<a href="../login_registro/index_admin.php"><button id="btn_cargar_productos" class="btn active">Regresar</button></a>-->
			</div>
		</header>
		<main>
		<!--	<table id="tabla" class="table text-center">
			<thead class="thead-dark">
			<h3>Fondo</h3>
				<tr> 
					<th>Pseudónimo</th>
					<th>Evaluador</th>
					<th>Identidad UAM</th>
					<th>Vanguardista</th>
					<th>Atractivo</th>
					<th>Novedoso</th>
					<th>Original</th>
					<th>Único</th>
					
					<th>Actualizar</th>
					<th>Eliminar</th>
				</tr>
				</thead>

                <?php
					   
					    // include("conexion.php");
					    // $productos= "SELECT * FROM credencial";
                ?>

				<?php
					//  $resultado = mysqli_query($conexion, $productos);
					//  while($dato=mysqli_fetch_assoc($resultado)){
				?>
                    <tr>
					<td><?php //  echo $dato["diseno"]; ?></td>
					<td><?php //  echo $dato["evaluador"]; ?></td>
					<td><?php //  echo $dato["comunidad"]; ?></td>
					<td><?php //  echo $dato["vanguardista"]; ?></td>
					<td><?php //  echo $dato["atractivo"]; ?></td>
					<td><?php //  echo $dato["novedoso"]; ?></td>
					<td><?php //  echo $dato["original"]; ?></td>
					<td><?php //  echo $dato["unico"]; ?></td>	
				</tr>

                <?php
                   // } mysqli_free_result($resultado);
                
				?>
							                   
            </table>-->

		<!--	<table id="tabla" class="table text-center">
			<thead class="thead-dark">
			<h3>Forma</h3>
				<tr>
					<th>Pseudónimo</th>
					<th>Evaluador</th>
					<th>Elementos de Identidad Universitaria</th>
					<th>Plan de estudios</th>
					<th>Nombre</th>
					<th>Código QR</th>
					<th>Fotografía</th>
					<th>Unidad Universitaria</th>
					<th>Matrícula</th>
					<th>Espacio para firma</th>
					
					<th>Actualizar</th>
					<th>Eliminar</th>
				</tr>
				</thead>

              <?php
					   
					  // include("conexion.php");
					  // $productos= "SELECT * FROM credencial";
                ?>

				<?php
					 // $resultado = mysqli_query($conexion, $productos);
					 // while($dato=mysqli_fetch_assoc($resultado)){
				?>
                    <tr>
					<td><?php //  echo $dato["diseno"]; ?></td>
					<td><?php //  echo $dato["evaluador"]; ?></td>
					<td><?php //  echo $dato["logo"]; ?></td>
					<td><?php //  echo $dato["nombre"]; ?></td>
					<td><?php //  echo $dato["matricula"]; ?></td>
					<td><?php //  echo $dato["unidad"]; ?></td>
					<td><?php //  echo $dato["plan"]; ?></td>
					<td><?php //  echo $dato["firma"]; ?></td>
					<td><?php //  echo $dato["codigo"]; ?></td>
					<td><?php //  echo $dato["foto"]; ?></td>		
				</tr>

                <?php
                //  }  mysqli_free_result($resultado);
                
				?>
							                   
            </table>-->

			<table id="tabla" class="table text-center">
			<thead class="thead-dark">
			
				<tr>
					<th>Nombre Completo</th>
					<th>Correo electrónico</th>
					<th>Horario</th>
					<th>Participación</th>
					
					
					<!--<th>Actualizar</th>
					<th>Eliminar</th>-->
				</tr>
				</thead>

                <?php
					   
					   include("conexion.php");
					   $productos= "SELECT * FROM usuarios";
                ?>

				<?php
					$resultado = mysqli_query($conexion, $productos);
					while($dato=mysqli_fetch_assoc($resultado)){
				?>
                    <tr>
					<td><?php echo $dato["nombre"]; ?></td>
					<td><?php echo $dato["email"]; ?></td>
					<td><?php echo $dato["horario"]; ?></td>					
					<td><?php echo $dato["participacion"]; ?></td>	
				</tr>

                <?php
                  } mysqli_free_result($resultado);
                
				?>
							                   
            </table>
            
			<div class="loader" id="loader"></div>
		</main>
	</div>
				
</body>
</html>


