<?php session_start();

// Comprobamos tenga sesion, si no entonces redirigimos y MATAMOS LA EJECUCION DE LA PAGINA.
if (isset($_SESSION['usuario'])) {
} else {
	header('Location: login.php');
	die();
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
    <link rel="stylesheet" href="../css/estilos.css">
	<link rel="stylesheet" href="../css/styles.css">
	<link rel="shortcut icon" href="../img/variacion1.jpg" type="image/x-icon">
   </head>
<body  oncontextmenu="return false" onkeydown="return false"> 
	<div class="contenedor">
		<header>
			<h5>Información de la credencial sobre las Egresadas y Egresados UAM</h5>
			<div>
				
				<!--<a href="muestra_admin.php"><button id="btn_cargar_productos" class="btn active" style="background: #333333; color:#ffffff;">Administradores</button></a>-->
				<a href="cerrar.php"><button id="btn_cargar_productos" class="btn active" style="background: #333333; color:#ffffff;">Cerrar sesión</button></a>
				<!--<a href="../login_registro/index_admin.php"><button id="btn_cargar_productos" class="btn active">Regresar</button></a>-->
			</div>
		</header>
		<main>
		
			<div class="table-responsive">
			<table id="tabla" class="table">
				<tr>
					<th>Folio</th>
					<th>Apellido Paterno</th>                    
					<th>Apellido Materno</th>
					<th>Nombre(s)</th>
					<th>Fecha de Nacimiento</th>
					<th>Unidad Universitaria</th>
					<th>División</th>
					<th>Carrera</th>
					<th>Correo Electrónico</th>
				</tr>

                <?php
					   
                       include("../conexion_1.php");
                       try {
                        $query = "SELECT * FROM acceso"; // Reemplaza 'tu_tabla' con el nombre real de la tabla
                        $stmt = $db->query($query);
                    } catch (PDOException $e) {
                        echo "Error de consulta: " . $e->getMessage();
                    }

                ?>

				<?php
                //$stmt = $db->prepare($insertar);
                //$stmt->execute();
					//$resultado = mysqli_query($conexion, $productos);
					//while($dato=mysqli_fetch_assoc($resultado))
					while ($dato = $stmt->fetch(PDO::FETCH_ASSOC)) {
				?>
                    <tr>
					<td><?php  echo $dato["id"]; ?></td>
					<td><?php  echo $dato["apellido_paterno"]; ?></td>
					<td><?php  echo $dato["apellido_materno"]; ?></td>
					<td><?php  echo $dato["nombre"]; ?></td>
					<td><?php  echo $dato["fec_nac"]; ?></td>
					<td><?php  echo $dato["unidad"]; ?></td>
					<td><?php  echo $dato["division"]; ?></td>
					<td><?php  echo $dato["carrera"]; ?></td>
					<td><?php  echo $dato["email"]; ?></td>
					
				</tr>

                <?php
                  } //mysqli_free_result($resultado);
                
				?>
							                   
			</table>
			</div>
            
			<div class="loader" id="loader"></div>
		</main>
	</div>
				
</body>
</html>