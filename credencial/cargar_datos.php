<?php 
//session_start(); 
//if (!isset ($_SESSION['email'])){ 
   // header("location: ini_ses/iniciar_sesion.php"); 
  //  exit(); 
//} 
?>

<?php
$rfc = $_POST["rfc"];
echo $rfc;
  
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Registro de Credencial de Egresada y Egresado UAM</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="shortcut icon" href="img/variacion1.jpg" type="image/x-icon">
	<script> 
			function mayus(e) {
		e.value = e.value.toUpperCase();
			}
		</script>
</head>

<div class="container">
		<div class="row mt-3">
			<div class="col">
					<div class="form-group row">
						<div class="col-4 col-md-4 mb-3">
							<img src="img/variacion6.png" alt="">
						</div>
						<div class="col-4 col-md-4 mb-3" >
							<!--	<center><img  src="img/vinculacion_logo.png" width="90px" align="center" alt=""></center>-->
						</div>

						<div class="col-4 col-md-4 mb-3" >
								<img src="img/egresados.png" width="200px" align="right" alt="">
						</div> <br><br>		

						<div class="col-12 col-md-12 mb-2 p-3 text-center" >
							<h2> Proceso para obtener la <strong>Credencial de Egresada y Egresado UAM</strong></h2>
						</div> <br><br><br>		    
               		</div>
			</div>
		</div>
</div>

<div class="container">
		<div class="row mt-3">
			<div class="col">
    <div class="container">
		<div class="row mt-3">
			<div class="col">
				<form action="insertar_archivos.php" method="POST" id="formulario" class="formulario" enctype="multipart/form-data">
					<div class="form-group row">
					
					<div class="col-4 col-md-4  p-4">
						<input type="text"  class="form-control maxle" placeholder="Matrícula" name="matricula" id="matricula" required value="<?php echo $datos[$i]['matricula']; ?>"  >
					</div>
					<div class="col-4 col-md-4  p-4">
						<input type="text" class="form-control" placeholder="Nombre Completo" name="nombre" id="nombre" value="<?php echo $datos[$i]['nombre'];  ?> " >
					</div>
					<div class="col-4 col-md-4  p-4">
						<input type="text" class="form-control" placeholder="Registro Federal de Contribuyentes" maxlength="13" name="rfc" id="rfc" value="<?php echo 	$respuesta[] = ['matricula' =>$campos[2]]; ?>"  >
					</div>
				
                        
						<div class="col-2 col-md-2  p-4">
						<a class="btn btn-dark text-white" href="codigo_barra/index.php" target="_blank">Obtener código</a>
						</div>

						
						<div class="col-5 col-md-5 mb-3">
							<label for="foto">Código de Barras de la Matrícula:</label>
							<input type="file" name="codigo" id="codigo" class="form-control" required>
							<!--<h5 style="font-size: 12px;">Nota: La Fotografía debe estar en formato PNG en un tamaño de 480px X 640px</h5>-->
						</div>

						<div class="col-4 col-md-5 mb-3">
							<label for="foto">Fotografía:</label>
							<input type="file" name="foto" id="foto" class="form-control" required>
							<h5 style="font-size: 12px;">Nota: La fotografía debe estar en formato PNG en un tamaño de 480px X 640px</h5>
						</div>

						<div class="col-6 col-md-6 mb-3">
							<label for="foto">Firma:</label>
							<input type="file" name="firma" id="firma" class="form-control" required>
							<h5 style="font-size: 12px;">Nota: La firma debe estar en formato PNG </h5>
						</div>

						<div class="col-6 col-md-6 mb-3">
							<label for="foto">Código QR:</label>
							<input type="file" name="qr" id="qr" class="form-control" required>
							<!--<h5 style="font-size: 12px;">Nota: La Fotografía debe estar en formato PNG en un tamaño de 480px X 640px</h5>-->
						</div>
						
					</div>				

					<div class="form-group row">
						<div class="col-12 text-center">
							<div class="row justify-content-center">
								<div class="col-12 col-sm-9 col-md-4">
									<button class="btn btn-dark  form-inline" type="submit" name="cargar_datos" onchange="toggleButton()" >Cargar archivos</button>
									<!--<a class="btn btn-dark text-white" href="ini_ses/php/salir.php">Salir</a>-->
									<!--<a class="btn btn-dark text-white" href="index.php">Regresar</a>-->
									<!--<button class="btn btn-dark  form-inline" type="reset">Reiniciar</button>-->
								   <!--<a href="../index.php"><button class="btn btn-success  form-inline" type="button" >Inicio</button></a>-->
								</div>
							</div>					
						</div>
					</div>

        </form>
              
               
			</div>
		</div>             
               
			</div>
		</div>
	</div>



	</div>
	
    
    <script src="../js/jquery-3.2.1.min.js"></script>
	<script src="../js/popper.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
</body>
</html>