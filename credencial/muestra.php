<?php 
//session_start(); 

//if (!isset ($_SESSION['email'])){ 
    //header("location: ini_ses/iniciar_sesion.php"); 
    //exit(); 
//} 

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
    <title>Archivos digitales</title>
   <link href="https://file.myfontastic.com/MpHoby8K5sctHF7hQyWiH/icons.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,600" rel="stylesheet"> 
    <link rel="stylesheet" href="css/estilos.css">
	<link rel="stylesheet" href="css/styles.css">
	<link rel="shortcut icon" href="img/variacion1.jpg" type="image/x-icon">
   </head>
<body  oncontextmenu="return false" onkeydown="return false"> 
	<div class="contenedor">
		<header>
			<h1>Archivos digitales de Egresada y Egresado UAM</h1>
			<div>
				<!--<a href="index.php"><button id="btn_cargar_productos" class="btn active">Cargar Datos</button></a>-->
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
			
			<table id="tabla" class="tabla col-md-12">
				<tr>
				<!--	<th>Matrícula</th>
					<th>Nombre(s) Completo</th>-->
					<!--<th>RFC</th>-->
					<!--<th>Unidad Universitaria</th>
					<th>Programa de Egreso</th>-->
					<th>Código de Barras</th>
					<th>Fotografía</th>
					<th>Firma</th> 
					<th>Código QR</th> 
					<!--<th>Actualizar</th>
					<th>Eliminar</th>-->
				</tr>

                <?php
					   
					   include("conexion.php");
					   $productos= "SELECT * FROM egresados_multimedia";
                ?>

				<?php
					$resultado = mysqli_query($conexion, $productos);
					while($dato=mysqli_fetch_assoc($resultado)){
				?>
                    <tr>
					
					<td><img width="80%" height="25px" src="data:image/jpg;base64,<?php echo base64_encode($dato["codigo"]); ?>" alt=""></td>
                    <td><img width="75px" height="75px" src="data:image/jpg;base64,<?php echo base64_encode($dato["foto"]); ?>" alt=""></td>
					<td><img width="75px" height="75px" src="data:image/jpg;base64,<?php echo base64_encode($dato["firma"]); ?>" alt=""></td>
					<td><img width="75px" height="75´x" src="data:image/jpg;base64,<?php echo base64_encode($dato["qr"]); ?>" alt=""></td>
                    <!--<td><a href="editar_registro.php?curp=<?php //echo $dato["curp"]; ?>" class='icon-refresh'></a></td>
                    <td><a href="eliminar_registro.php?curp=<?php //echo $dato["curp"]; ?> " class='icon-x'></a></td>-->
					
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


