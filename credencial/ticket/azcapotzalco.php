<?php session_start();

// Comprobamos tenga sesion, si no entonces redirigimos y MATAMOS LA EJECUCION DE LA PAGINA.
if (isset($_SESSION['usuario'])) {
} else {
	header('Location: login.php');
	die();
}

?>


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

    <title>Ticket Azcapotzalco </title>
    <link rel="shortcut icon" href="../img/variacion1.jpg" type="image/x-icon">
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script> 
        function mayus(e) {
    e.value = e.value.toUpperCase();
        }
    </script>

</head>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
	<link rel="stylesheet" href="css/estilos_ventana.css">

<body id="page-top">

    <div class="container  py-3 text-center" >
            <img class="navbar-brand js-scroll-trigger" src="img/variacion6.png"   alt=""> 
         <!--  <img class="navbar-brand js-scroll-trigger" src="img/vinculacion_logo.png" width="100px" alt="">-->
            <img class="navbar-brand js-scroll-trigger" src="img/egresados.png" width="200px"  alt="">
          
        </div>

   
    <!-- Cabecera-->
    <section class=""   >
        <div class="container-fluid  text-white" style="background: #CD032E;" >

            <div class="col-lg-12 border" style="background: #CD032E;">
                <h2  class="text-center pt-3 pb-3">"Formato para pago en Caja de Unidad"</h2>

            </div>
        </div>
    </section>

    <div class="container text-right">
    <br>
    
    </div>
    <!-- Contenido -->
    <div class="container">


        <div class="row  ">
            <div class="col-md-12 ">
                <!-- Inicia Formulario -->
                <div class="row  ">
                    <div class="col-md-12 ">
                        <form class="form-amount" action="buscar.php" method="post" >
        
                            <!-- Inicia la primera fila del formulario -->
                          <!-- Inicia la primera fila del formulario -->
                          <div class="form-row">

            <div class="col-12 col-md-6 mb-3">
                <label for="nombre">Nombre(s) Completo:</label>
                <input type="text" class="form-control" onkeyup="mayus(this);" placeholder="Nombre Completo" name="nombre" id="nombre"  disabled >
                <h5 style="font-size: 12px;">Formato: Apellido Paterno / Apellido Materno / Nombre(s) </h5>
            </div>

            <div class="col-12 col-md-6 mb-3">
                <label for="matricula">Matrícula:</label>
                <input type="number" class="form-control" placeholder="Matrícula" name="matricula" id="matricula"  >
                <h5 style="font-size: 12px;">Nota: Escribir la matrícula del último nivel académico. Únicamente números y sin espacios.</h5>
            </div>

            <div class="form-group col-md-4">
                <label>Concepto: </label>
                    <select id="inputState" name="inputState" class="form-control"  disabled>
                            <option value="DIGITAL">Elige una opción</option>
                            <option value="CREDENDIAL FISICA">CREDENDIAL FISICA O DIGITAL</option>
                            <option value="DIGITAL">CREDENCIAL DIGITAL</option>
                            <option value="FISICA">CREDENCIAL FISICA</option>
                    </select>
            </div>  

            <div class="form-group col-md-8">
                <label>Programa de Egreso: </label>
                <input type="text" class="form-control" onkeyup="mayus(this);" id="plan" name="plan" placeholder="Programa de Egreso"   disabled>
            </div> 

            <div class="form-group col-md-4">
                <label>Unidad Universitaria: </label>
                <input type="text" class="form-control" id="unidad" name="unidad"  value="Unidad" disabled>
            </div>

            <div class="form-group col-md-4">
                <label>Año de titulación: </label>
                <input type="number" class="form-control" id="egreso" name="egreso" placeholder="Año"  disabled>
            </div> 

            <div class="form-group col-md-4">
                <label>Costo: </label>
                <input type="text" class="form-control" id="precio" name="precio"  value="200.00 MX" disabled>
            </div>

      

    <!--<div class="form-group col-md-6">
        <label>Número de cuenta: </label>
        <input type="text" class="form-control" id="precio" name="precio"  value="5777918836" disabled>
    </div>  

    <div class="form-group col-md-6">
        <label>Clabe interbancaria: </label>
        <input type="text" class="form-control" id="clabe" name="clabe"  value="002180057779188360" disabled>
    </div>  

    <div class="form-group col-md-6">
        <label>Banco: </label>
        <input type="text" class="form-control" id="banco" name="banco"  value="Citibanamex" disabled>
    </div> --> 
    
   <!-- <div class="col-12 col-md-6 mb-3">
    <label for="comprobante">Identificación oficial:</label>
    <input type="file" name="comprobante" id="comprobante" class="form-control" required>
    <h5 style="font-size: 12px;">Nota: Colocar una fotografía o escaneo de tu identificación oficial. </h5>
</div> -->

   

<!--<center>	<div class="form-group col-md-12" >
<img src="img/codigo.png" width="300px" height="70px" alt="">
<h5 style="font-size: 12px;"></h5>
</div></center>-->

<div class="form-group col-md-12 text-center p-2">

<h5 style="font-size: 15px;">Nota: Favor de enviar por correo electrónico comprobante de pago e identificación oficial.</h5>
</div>



<!--<div class="col-12 col-md-6 mb-3">
<label for="foto">Fotografía:</label>
<input type="file" name="foto" id="foto" class="form-control" disabled>
<h5 style="font-size: 12px;">Nota: La Fotografía debe estar en formato PNG en un tamaño de 480px X 640px</h5>
</div>-->

  <!--  <div class="form-group col-md-6 align-items-center ">
            <img src="img/pago.png" alt="" height="75px" width="80%">
    </div>-->

                              <div class="form-group col-md-12 text-center ">
  				                <button style="background: #CD032E;; color:white;" class="btn " type="submit" >Consultar datos</button>
                               <!-- <button style="background: #0072CE; color:white;" class="btn  " onclick="printHTML()" type="button">Solicitar Ticker</button>-->
                                <!--<a href="azc_reposicion.php"> <button style="background: #CD032E;; color:white;" class="btn " type="button">Reposición de credencial</button></a>-->

                                <button style="background: #CD032E;; color:white;" class="btn " type="button" id="btn-abrir-popup" class="btn-abrir-popup">Transferencia bancaria</button>
                                <a href="../login_registro/cerrar.php"> <button style="background: #CD032E; color:white;" class="btn " type="button">Finalizar sesión</button></a>
                                </div>
                            </div>
        
        
                        </form>
                    </div>
                </div>

                <!-- Finaliza Formulario -->
            </div>
        </div>

    </div>
   
    <div class="overlay" id="overlay">
			<div class="popup" id="popup">
				<a href="#" id="btn-cerrar-popup" class="btn-cerrar-popup"><i class="fas fa-times"></i></a>
				<h4>Datos bancarios para transferencia</h4>
				<!--<h4>y recibe un cupon de descuento.</h4>-->
				<form action="">
					<div class="contenedor-inputs">
                        <input type="text" placeholder="Banco" disabled>
                        <input type="text" placeholder="Clabe interbancaria" disabled>
						<input type="text" placeholder="Número de Cuenta" disabled>
					</div>
					<!--<input type="submit" class="btn-submit" value="Suscribirse">-->
				</form>
			</div>
		</div> 



    <script src="js/bootstrap.min.js "></script>
    <script src="js/jquery-3.5.1.min.js "></script>
    <script src="js/bootstrap.bundle.min.js "></script>
    <script src="js/popup.js"></script>
</body>

</html>


<script>
    function printHTML() {
      if (window.print) {
        window.print();
      }
    }
    </script>

    


  
