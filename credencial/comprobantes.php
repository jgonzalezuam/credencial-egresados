

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Font Awesome Icons -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Bootstrap -->
    <link href="css/creative.min.css" rel="stylesheet"> 
    <link rel="shortcut icon" href="img/variacion1.jpg" type="image/x-icon">
    <title>Comprobantes</title>    
    <script> 
    function Validar(f) { 
        if (f.email.value == "") {
             alert("Introduce el Email, por favor.");
              f.email.focus(); 
              return (false);
               } 
               if (f.password.value.length <= 6)    { 
                   alert("Introduce la contraseña correcta de mínimo 6 caracteres.");
                f.password.focus(); 
                return (false);
                 } 
                return (true); 
                } 
                </script>

</head>

<body id="page-top">


    <!-- Menú de Navegación -->
    <nav class="navbar navbar-expand-lg navbar-light py-3">
        <div class="container"  >
            <a class="navbar-brand js-scroll-trigger" ><img src="img/variacion6.png" alt=""></a>
           <!-- <a class="navbar-brand js-scroll-trigger" ><img src="img/Logo_Vinculación.png" alt=""></a>-->
            <a class="navbar-brand js-scroll-trigger" ><img src="img/egresados.png" width="200px" alt=""></a>
          
        </div>
    </nav>
    <!-- Termina Menú de Navegación -->

    <!-- Cabecera-->
    <section class="">
        <div class="container-fluid bg-dark text-white">

            <div class="col-lg-12 border">
                <h2 class="text-center pt-3 pb-3">Credencial de Egresada y Egresado UAM</h2>

            </div>
        </div>
    </section>
    <!-- Termina Cabecera-->
	<div class="container">
		<div class="row mt-3">
			<div class="col">
				<form action="insertar_comprobantes.php" method="POST" id="formulario" class="formulario" enctype="multipart/form-data">
					<div class="form-group row">
					
					<div class="col-4 col-md-4  p-4">
                    <label for="foto">Matrícula:</label>
						<input type="number"  class="form-control " placeholder="Matrícula" name="matricula" id="matricula" required  >
					</div>
					<div class="col-4 col-md-4  p-4">
                    <label for="foto">Nombre:</label>
						<input type="text" class="form-control" placeholder="Nombre Completo" name="nombre" id="nombre" >
					</div>
					<div class="col-4 col-md-4  p-4">
                    <label for="foto">RFC:</label>
						<input type="text" class="form-control" placeholder="Registro Federal de Contribuyentes " maxlength="13" name="rfc" id="rfc"  >
					</div>

                    <div class="col-4 col-md-4  mb-3">
                    <label for="foto">Unidad Universitaria:</label>
                    <select class="form-control col-12" style="font-size: 13px;" name="unidad" id="unidad" required>
                        <option selected>Elige una opción </option>
                        <option value="AZCAPOTZALCO">AZCAPOTZALCO</option>
                        <option value="CUAJIMALPA">CUAJIMALPA</option>
                        <option value="IZTAPALAPA">IZTAPALAPA</option>                        
                        <option value="LERMA">LERMA</option>
                        <option value="XOCHIMILCO">XOCHIMILCO</option>
                    </select>
					</div>
 
					<!--	<div class="col-2 col-md-2  p-4">
						<a class="btn btn-dark text-white" href="codigo_barra/index.php" target="_blank">Obtener código</a>
						</div>-->

						
						<!--<div class="col-5 col-md-5 mb-3">
							<label for="foto">Código de Barras de la Matrícula:</label>
							<input type="file" name="codigo" id="codigo" class="form-control" required>
							<h5 style="font-size: 12px;">Nota: La Fotografía debe estar en formato PNG en un tamaño de 480px X 640px</h5>
						</div>-->

						<div class="col-4 col-md-4 mb-3">
							<label for="foto">Comprobante:</label>
							<input type="file" name="comprobante" id="comprobante" class="form-control" required>
							<h5 style="font-size: 12px;">Nota: Incluir en el mismo archivo el formato de pago y comprobante.</h5>
						</div>

						<div class="col-4 col-md-4 mb-3">
							<label for="foto">Identificación Oficial:</label>
							<input type="file" name="identificacion" id="identificacion" class="form-control" required>
							<h5 style="font-size: 12px;">Nota: Puede ser INE, Pasaporte, Cedúla Profesional, Cartilla Militar (hombres). </h5>
						</div>

						<!--<div class="col-6 col-md-6 mb-3">
							<label for="foto">Código QR:</label>
							<input type="file" name="qr" id="qr" class="form-control" required>
							<h5 style="font-size: 12px;">Nota: La Fotografía debe estar en formato PNG en un tamaño de 480px X 640px</h5>
						</div>-->
						
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

    <!-- Footer -->
    <footer class="bg-dark fixed-bottom py-3">
        <div class="container">

            <div class="small text-center text-white">Universidad Autónoma Metropolitana</div>
        </div>
    </footer>

    <!-- Bootstrap y JavaScript -->
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/creative.min.js"></script>

</body>

</html>