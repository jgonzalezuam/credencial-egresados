<?php 
session_start(); 

if (!isset ($_SESSION['email'])){ 
    header("location: ../usuarios/iniciar_acceso.php"); 
    exit(); 
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
        <div class="container-fluid  text-white" style="background: #AD25A8;" >

            <div class="col-lg-12 border" style="background: #AD25A8;">
                <h2  class="text-center pt-3 pb-3">"Reposición de la Credencial de Egresada y Egresado UAM".</h2>

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
                        <form class="form-amount" action="" method="post" >
        
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
                                            <option value="DIGITAL">RENOVACIÓN DE LA CREDENCIAL FISICA</option>
                                            <option value="FISICA">RENOVACIÓN DE LA CREDECIAL DIGITAL</option>
                                            <option value="DIGITAL">REPOSICIÓN DE LA CREDENCIAL FISICA</option>
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
                                    <input type="text" class="form-control" id="precio" name="precio"  value="100.00 MX" disabled>
                                </div>
        
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

                                <div class="form-group col-md-12 text-center mt-3">
                                <!--<button style="background: #F08200; color:white;" class="btn btn-warning" type="submit" >Consultar datos</button>-->
                                <button style="background: #AD25A8; color:white;" class="btn " onclick="printHTML()" type="button">Solicitar Ticker</button>
                               <a href="lerma.php"> <button style="background: #AD25A8; color:white;" class="btn " type="button" >Regresar</button></a>
                               <a href="../usuarios/salir.php"> <button style="background: #AD25A8; color:white;" class="btn " type="button" >Finalizar sesión</button></a>
                                </div>
                            </div>
        
        
                        </form>
                    </div>
                </div>












                <!-- Finaliza Formulario -->
            </div>
        </div>

    </div>
   



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

