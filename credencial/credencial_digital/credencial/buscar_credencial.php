
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Proceso para obtener la Credencial de Egresada y Egresado UAM</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="shortcut icon" href="img/variacion1.jpg" type="image/x-icon">
	<script> 
			function mayus(e) {
		e.value = e.value.toUpperCase();
			}
		</script>
</head>  

<body>
	<div class="container">
		<div class="row mt-3">
			<div class="col">
				<form action="../diseno_1.php" method="POST" id="formulario" class="formulario" enctype="multipart/form-data">
                <!--<form action="datos_egresados.php" method="POST" id="formulario" class="formulario" enctype="multipart/form-data">-->
                    <div class="form-group row">
						<div class="col-4 col-md-4 mb-3">
							<img src="img/variacion6.png" alt="">
						</div>
						<div class="col-4 col-md-4 mb-3" >
								<!--<center><img  src="img/vinculacion_logo.png" width="90px" align="center" alt=""></center>-->
						</div>

						<div class="col-4 col-md-4 mb-3" >
								<img src="img/egresados.png" width="200px" align="right" alt="">
						</div> <br> 

						<div class="col-12 col-md-12 mb-3  p-3 text-center" >
							<h2 >Obtener la <strong>Credencial de Egresada y Egresado UAM</strong></h2>
						</div> <br><br><br>

						<div class="col-12 col-md-12 mb-3">
								<center><label for="matricula">Matrícula:</label>
								<input type="number" class="form-control" placeholder="Matrícula" name="matricula" id="matricula" >
								<!--<<h5 style="font-size: 12px;">Nota: Escribir la matrícula del último nivel académico. Únicamente números y sin espacios.</h5></center>-->
						</div>

						 <div class="col-12 col-md-12 mb-3">
                        <label>Unidad Universitaria:</label>
                    <select class="custom-select" style="font-size: 13px;" name="unidad" id="unidad" required >
                        <option value="">Selecciona la Unidad </option>
                        <option value="azcapotzalco">AZCAPOTZALCO</option>
                        <option value="cuajimalpa">CUAJIMALPA</option>
                        <option value="iztapalapa">IZTAPALAPA</option>                        
                        <option value="lerma">LERMA</option>
                        <option value="xochimilco">XOCHIMILCO</option>
                    </select>
						</div>
						
					</div>

		
					<div class="form-group row">
						<div class="col-12 text-center">
							<div class="row justify-content-center">
								<div class="col-12 col-sm-12 col-md-4">
									<button class="btn btn-dark  form-inline" type="submit" name="cargar_datos" >Consultar datos</button>
									<!--<button class="btn btn-dark  form-inline" type="reset">Borrar</button>-->
								<!-- <a href="pago/paypal.php" target="_blank"><button class="btn btn-dark  form-inline" type="button"> Pago en línea</button></a>-->
								   <!--<a href="ini_ses/php/salir.php"><button class="btn btn-dark  form-inline" type="button" >Salir</button></a>-->
								</div>
							</div>					
						</div>
					</div>

				

				</form>
			</div>
		</div>
	</div>
	
	
	<script src="../js/jquery-3.2.1.min.js"></script>
	<script src="../js/popper.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
</body>
</html>