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
	
    <title>Modificación de Datos de Egresadas y Egresados</title>
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
			<h1>Modificación de Datos de Egresadas y Egresados</h1>
			<div>
				<a href="cerrar.php"><button id="btn_cargar_productos" class="btn active" style="background: #333333; color:#ffffff;">Cerrar sesión</button></a>
				<!--<a href="../login_registro/index_admin.php"><button id="btn_cargar_productos" class="btn active">Regresar</button></a>-->
			</div>
		</header>
		<main>
		
		<?php
 include("../conexion_1.php");

 $id = $_REQUEST["id"];

        $sql = $db->prepare("SELECT * FROM egresados_multimedia WHERE id = ?");
        $sql -> execute([$id]);

        $Fila = $sql->fetch(PDO::FETCH_OBJ);

 //$consulta=mysql_query("SELECT * FROM egresad
 //$query = "SELECT * FROM egresado_multimedia WHERE id=".$id.";";
 //$stmt = $db->query($query);
 //$consulta=mysql_query("SELECT * FROM egresado_multimedia WHERE id=".$id.";");
 //$dato=mysql_fetch_array($consulta);

?>

	<div class="container">
		<div class="row mt-3">
			<div class="col"> 
				<form action="editar_final.php" method="POST" id="formulario" class="formulario" enctype="multipart/form-data">
					<div class="form-group row">
					
					<div class="col-3 col-md-3 p-3">
					<label >Folio:</label>
						<input type="text"  class="form-control " placeholder="Matrícula" name="folio" id="folio"  value="<?php echo $Fila -> id?>" >
					</div>
					<div class="col-3 col-md-3  p-3">
                    <label >Matrícula:</label>
						<input type="text" class="form-control" placeholder="Nombre Completo" name="matricula" id="matricula" value="<?php echo $Fila -> matricula?>" >
					</div>
					<div class="col-6 col-md-6  p-3">
                    <label >Nombre Completo:</label>
						<input type="text" class="form-control" placeholder=""  name="nombre" id="nombre" value="<?php echo $Fila -> nombre?>"  >
					</div>
					<div class="col-3 col-md-3  p-3">
                    <label >RFC:</label>
						<input type="text" class="form-control" placeholder="Unidad Universitaria"  name="rfc" id="rfc" value="<?php echo $Fila -> rfc?>"  >
					</div>
					
                    <div class="col-3 col-md-3  p-3">						
					<label >Fecha de solicitud:</label>
						<input type="date" class="form-control" placeholder="Nivel"  name="fec_emision" id="fec_emision" value="<?php echo $Fila -> fec_emision?>" >
					</div>

					<div class="col-3 col-md-3  p-3">
                    <label >Status:</label>
						<input type="text" class="form-control" placeholder="Unidad Universitaria"  name="valida" id="valida" value="<?php echo $Fila -> valida?>"  >
					</div>

					<div class="col-12 col-md-12  p-3">
					<input type="hidden" name="hidden" value="1">
    <button type="submit" class="btn btn-dark">Enviar</button>
					</div>


						
					</div>				


        </form>
              
               
			</div>
		</div>
	</div>
	
				
</body>
</html>







