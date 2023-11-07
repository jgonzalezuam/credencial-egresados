<?php 
session_start(); 

if (!isset ($_SESSION['email'])){ 
    header("location: ../usuarios/iniciar_acceso.php"); 
    exit(); 
} 

?>
<?php
$matricula = $_POST["matricula"];			   
include("conexion.php");
$productos= "SELECT nombre, apellido_paterno, apellido_materno, matricula, unidad, plan, nivel, egreso FROM egresados_credencial WHERE matricula = $matricula";


?>

<?php
	$resultado = mysqli_query($conexion, $productos);
	while($dato=mysqli_fetch_assoc($resultado)){
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

    <title>Reposición de Credencial </title>
    <link rel="shortcut icon" href="../img/variacion1.jpg" type="image/x-icon">
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script> 
        function mayus(e) {
    e.value = e.value.toUpperCase();
        }
    </script>

</head>

<body id="page-top">

    <div class="container  py-3 text-center" >
            <img class="navbar-brand js-scroll-trigger" src="img/variacion6.png"   alt=""> 
           <!--<img class="navbar-brand js-scroll-trigger" src="img/vinculacion_logo.png" width="100px" alt="">-->
            <img class="navbar-brand js-scroll-trigger" src="img/egresados.png" width="200px"  alt="">
          
        </div>

   
    <!-- Cabecera-->
    <section class=""   >
        <div class="container-fluid  text-white" style="background: #0072CE;" >

            <div class="col-lg-12 border" style="background: #0072CE;">
                <h2  class="text-center pt-3 pb-3">"Reposición de Credencial Egresado".</h2>

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
                        <form class="form-amount" action="buscar_repoxoc.php" method="post" >
        
                            <!-- Inicia la primera fila del formulario -->
                            <div class="form-row">

                            <div class="col-12 col-md-6 mb-3">
							    <label for="nombre">Nombre(s) Completo:</label>
							    <input type="text" class="form-control" onkeyup="mayus(this);" placeholder="Nombre Completo" name="nombre" id="nombre"  value="<?php echo $dato['nombre'] . " " .  $dato['apellido_paterno'] . " " . $dato['apellido_materno'];  ?> " disabled>
							    <h5 style="font-size: 12px;">Formato: Nombre(s) / Apellido Paterno / Apellido Materno</h5>
						    </div>

                            <div class="col-12 col-md-6 mb-3">
								<label for="matricula">Matrícula:</label>
								<input type="number" class="form-control" placeholder="Matrícula" name="matricula" id="matricula"   value="<?php echo $dato['matricula']; ?>" disabled> 
								<h5 style="font-size: 12px;">Nota: Escribir la matrícula del último nivel académico. Únicamente números y sin espacios.</h5>
						</div>

                            <div class="form-group col-md-6">
                                    <label>Tipo de Credencial de Egresado </label>
                                    <select id="inputState" name="inputState" class="form-control" disabled  >
                                            <option selected value="CREDENCIAL FISICA">CREDENCIAL FISICA</option>
                                          <!--  <option value="DIGITAL">CREDENCIAL DIGITAL</option>
                                            <option value="FISICA">CREDENCIAL FISICA</option>-->
                                </select>
                            </div>    
        
                                <div class="form-group col-md-6">
                                    <label>Precio: </label>
                                    <input type="text" class="form-control" id="precio" name="precio"  value="100.00 MX" disabled>
                                </div>

                                <div class="form-group col-md-6">
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
                                </div>  
                                
                               <!-- <div class="col-12 col-md-6 mb-3">
								<label for="comprobante">Identificación oficial:</label>
								<input type="file" name="comprobante" id="comprobante" class="form-control" required>
                                <h5 style="font-size: 12px;">Nota: Colocar una fotografía o escaneo de tu identificación oficial. </h5>
							</div> -->

                               

					<center>	<div class="form-group col-md-12" >
							<img src="img/codigo.png" width="300px" height="70px" alt="">
							<h5 style="font-size: 12px;"></h5>
                        </div></center>

                        <div class="form-group col-md-12">
							
							<h5 style="font-size: 12px;">Nota: favor de enviar comprobante de pago e identificación al correo.</h5>
                        </div>

                       
                        	
                        <!--<div class="col-12 col-md-6 mb-3">
							<label for="foto">Fotografía:</label>
							<input type="file" name="foto" id="foto" class="form-control" disabled>
							<h5 style="font-size: 12px;">Nota: La Fotografía debe estar en formato PNG en un tamaño de 480px X 640px</h5>
						</div>-->
                         
                              <!--  <div class="form-group col-md-6 align-items-center ">
                                        <img src="img/pago.png" alt="" height="75px" width="80%">
                                </div>-->

                                <div class="form-group col-md-6 align-items-center ">
                                       
                                </div>

                                <div class="form-group col-md-12 text-center mt-3">
                               <!-- <button style="background: #0072CE; color:white" class="btn " type="submit" >Realizar búsqueda</button>-->
                                <button style="background: #0072CE; color:white" class="btn " onclick="printHTML()" type="button">Solicitar Ticker</button>
                               <a href="xochimilco.php"> <button style="background: #0072CE; color:white" class="btn " type="button" >Regresar</button></a>
                                 
                                </div>
                            </div>
        
        
                        </form>
                    </div>
                </div>












                <!-- Finaliza Formulario -->
            </div>
        </div>

    </div>
   

 <?php
                  } mysqli_free_result($resultado);
                
				?>

    <script src="js/bootstrap.min.js "></script>
    <script src="js/jquery-3.5.1.min.js "></script>
    <script src="js/bootstrap.bundle.min.js "></script>
</body>

</html>


<script>
    function printHTML() {
      if (window.print) {
        window.print();
      }
    }
    </script>

