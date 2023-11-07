<?php session_start();

// Comprobamos tenga sesion, si no entonces redirigimos y MATAMOS LA EJECUCION DE LA PAGINA.
if (isset($_SESSION['usuario'])) {
} else {
	header('Location: login.php');
	die();
}

?>
<?php
$matricula = $_POST['matricula'];	

try{
    $client = new SoapClient ("https://siae.uam.mx:8443/sae/webservices/aeugwssiv005dlw.wsdl", 
    array('cache_wsdl'=> WSDL_CACHE_NONE, 'trace' => TRUE, 'connection_timeout'=>150));
    $param = array(
        'PCUENTA' => $matricula,
        'PUSUARIO' => 'rcgvdiod00ow',
        'PIDKEY' => 31,
        'PHASH' => '30313C18FFE728C680EF10B3B87892146485D99397D7C1238CC5348958CD69EF');
    $ready = $client->oSelDatEgrCtaUsr($param);
    //var_dump($ready);
    //echo "RESPONSE: \n" . $client->__getLastResponse() . "\n";
} catch(Exception $e){
    trigger_error($e->getMessage(), E_USER_WARNING);
}
	
    function separaArreglo($cadena){
	
        $campos = explode('|', $cadena);
        $respuesta = ['matricula' =>$campos[2], 'rfc'=>$campos[3], 'nombre'=>$campos[4], 'numero'=>$campos[5], 'grado'=>$campos[6], 'numero_dos'=>$campos[7], 'plan'=>$campos[8], 'unidad'=>$campos[9], 'egreso'=>$campos[10], 'estado'=>$campos[11], 'nomgra'=>$campos[12]];
        return $respuesta;

}

$datos = separaArreglo($client->__getLastResponse());

//echo $client->__getLastResponse();
 
?>

<?php
//$matricula = $_POST["matricula"];			   
//include("conexion.php");
//$productos= "SELECT nombre, apellido_paterno, apellido_materno, matricula, unidad, plan, nivel, egreso FROM egresados_credencial WHERE matricula = $matricula";


?>

<?php
	//$resultado = mysqli_query($conexion, $productos);
	//while($dato=mysqli_fetch_assoc($resultado)){
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

<body id="page-top">

    <div class="container  py-3 text-center" >
            <img class="navbar-brand js-scroll-trigger" src="img/variacion6.png"   alt=""> 
           <!--<img class="navbar-brand js-scroll-trigger" src="img/vinculacion_logo.png" width="100px" alt="">-->
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
                    <?php //foreach($datos as $i=>$alumno){?>
                        <form class="form-amount" action="buscar.php" method="post" >
        
                            <!-- Inicia la primera fila del formulario -->
                            <div class="form-row">

                            <div class="col-12 col-md-6 mb-3">
							    <label for="nombre">Nombre(s) Completo:</label>
							    <input type="text" class="form-control" onkeyup="mayus(this);" placeholder="Nombre Completo" name="nombre" id="nombre" value="<?php echo $datos['nombre']; ?>" disabled >
							    <h5 style="font-size: 12px;">Formato: Apellido Paterno / Apellido Materno / Nombre(s)</h5>
						    </div>

                            <div class="col-12 col-md-6 mb-3">
								<label for="matricula">Matrícula:</label>
								<input type="number" class="form-control" placeholder="Matrícula" name="matricula" id="matricula" value="<?php echo $datos['matricula']; ?>" disabled>
								<!--<h5 style="font-size: 12px;">Nota: Escribir la matrícula del último nivel académico. Únicamente números y sin espacios.</h5>-->
						</div>

                            <div class="form-group col-md-4">

                            
                                    <label>Concepto: </label>
                                    <select id="inputState" name="inputState" class="form-control"  >
                                            <option selected value="">Elige una opción</option>
                                            <option value="DIGITAL">EMISIÓN DE LA CREDENCIAL FISICA</option>
                                            <option value="FISICA">EMISIÓN DE LA CREDENCIAL DIGITAL</option>
                                          <!--  <option value="DIGITAL">RENOVACIÓN DE LA CREDENCIAL FISICA</option>
                                            <option value="FISICA">RENOVACIÓN DE LA CREDECIAL DIGITAL</option>
                                            <option value="DIGITAL">REPOSICIÓN DE LA CREDENCIAL FISICA</option>-->
                                </select>
                            </div>  
                            
                            <div class="form-group col-md-8">

                            
                            <label>Programa de Egreso: </label>
                            <input type="text" class="form-control" onkeyup="mayus(this);" id="plan" name="plan" placeholder="Programa de Egreso"  value="<?php echo $datos['plan']; ?>" disabled>
                            </div> 

                             <div class="form-group col-md-4">
                           
                           <label>Unidad Universitaria: </label>
                           <input type="text" class="form-control" id="unidad" name="unidad" placeholder="Unidad" value="<?php echo $datos['unidad']; ?>" disabled>
                           </div> 

                            <div class="form-group col-md-4">
                           
                            <label>Año de titulación: </label>
                            <input type="number" class="form-control" id="egreso" name="egreso" placeholder="Año" value="<?php echo $datos['egreso']; ?>" disabled>
                            </div> 
        
                                <div class="form-group col-md-4">
                                    <label>Precio: </label>
                                    <input type="text" class="form-control" id="precio" name="precio"  value="200.00 MX" disabled>
                                </div>

                               <!-- <div class="form-group col-md-6">
                                    <label>Número de cuenta: </label>
                                    <input type="text" class="form-control" id="precio" name="precio"  value="xxxx xxxx xxxx xxxx" disabled>
                                </div>  -->
                                
                               <!-- <div class="col-12 col-md-6 mb-3">
								<label for="comprobante">Identificación oficial:</label>
								<input type="file" name="comprobante" id="comprobante" class="form-control" required>
                                <h5 style="font-size: 12px;">Nota: Colocar una fotografía o escaneo de tu identificación oficial. </h5>
							</div> -->

                               

					<!--<center>	<div class="form-group col-md-12" >
							<img src="img/codigo.png" width="300px" height="70px" alt="">
							<h5 style="font-size: 12px;"></h5>
                        </div></center>-->

                       

                       
                        	
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

                                <!--<div class="form-group col-md-12 text-center mt-3">-->
  				                <!--<button style="background: #CD032E" class="btn btn-danger" type="submit" >Realizar búsqueda</button>-->
                               <!-- <button style="background: #CD032E" class="btn btn-danger" onclick="printHTML()" type="button">Solicitar Ticker</button>-->
                                <!--<a href="azc_reposicion.php"> <button style="background: #CD032E" class="btn btn-danger" type="button">Reposición de credencial</button></a>-->
                                <!--<a href="azcapotzalco.php"> <button style="background: #CD032E" class="btn btn-danger" type="button" >Regresar</button></a>-->
                                </div>
                            </div>
        
        
                        </form>
                        <?php //}?>    
                        <div class="form-group col-md-12">
							
							<h5 style="font-size: 12px;">Nota: Presenta este formato en el área de Caja de tu Unidad de Egreso..</h5>
                        </div>
                            <div class="form-group col-md-12 text-center mt-3">
  				                <!--<button style="background: #CD032E" class="btn btn-danger" type="submit" >Realizar búsqueda</button>-->
                                <button style="background: #CD032E" class="btn btn-danger" onclick="printHTML()" type="button">Solicitar Ticket</button>
                                <!--<a href="azc_reposicion.php"> <button style="background: #CD032E" class="btn btn-danger" type="button">Reposición de credencial</button></a>-->
                                <a href="azcapotzalco.php"> <button style="background: #CD032E" class="btn btn-danger" type="button" >Regresar</button></a>
                                <a href="../login_registro/cerrar.php"> <button style="background: #CD032E;; color:white;" class="btn " type="button">Finalizar sesión</button></a>
                                </div>
                    </div>
                </div>












                <!-- Finaliza Formulario -->
            </div>
        </div>

    </div>
   
    <?php
               //   } mysqli_free_result($resultado);
                
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