<style>
        /* Define clases de colores para el fondo del input */
        .azcapotzalco { background-color: #CD032E; }        
        .cuajimalpa { background-color: #F08200; }
        .iztapalapa { background-color: #57A519; }        
        .lerma { background-color: #AD25A8; }
        .xochimilco { background-color: #0072CE; }
    </style>
<!DOCTYPE html> 
<html lang="es">

<head> 
    <meta charset="utf-8">
    <title>Credencial de Egresada y Egresado UAM </title>
    <link rel="shortcut icon" href="img/variacion1.jpg" type="image/x-icon">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->  
    <link href="img/favicon.ico" rel="icon">

   <!-- Google Web Fonts --> 
    <!--<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;900&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet --> 
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="css/estudios.css">
</head>

<body> 
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center"> 
        <div class="spinner-border text-dark" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

      <!-- Navbar Start --> 
      
        <!-- Navbar End -->

        <!-- Carousel Start -->
    
    <!-- Carousel End -->

       <!-- About Start -->
       <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5">
                   
                    <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s" >
                        <div class="position-relative h-100">
                            <img class="img-fluid position-absolute"  src="img/diseno_2.png" alt="" style="object-fit: cover;">
                        </div>
                    </div>

                  <!--  <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="position-relative h-100">
                                    <center><a class="btn  py-3 px-5 mt-2" href="https://drive.google.com/file/d/14NY4cE3LfgEEpfkqHXOYxwcHr1bNjmlz/view" target="_blank" style="background: #151313; color: white; " >Conoce los beneficios</a></center>
                            </div>
                        </div>-->

            
                </div>
            </div>
        </div>
        <!-- About End -->
        <?php
include('credencial/conexion_1.php');

$matricula = $_POST['matricula'];  

$valor = $_POST['unidad_uno'];  
$valor2 = $_POST['unidad_dos']; 
//$valor = '$unidAD; // Este valor puede ser dinámico

// Definir una variable para la clase CSS
$claseColor = '';
$claseColor2 = '';

               
                // Asignar la clase CSS según el valor
if ($valor == 'azcapotzalco') {
     $claseColor = 'azcapotzalco';
} elseif ($valor == 'cuajimalpa') {
    $claseColor = 'cuajimalpa';
 } elseif ($valor == 'iztapalapa') {
      $claseColor = 'iztapalapa';
 } elseif ($valor == 'lerma') {
     $claseColor = 'lerma';
} elseif ($valor == 'xochimilco') {
      $claseColor = 'xochimilco';
}
            
                                // Asignar la clase CSS según el valor
 if ($valor2 == 'azcapotzalco') {
         $claseColor2 = 'azcapotzalco';
 } elseif ($valor2 == 'cuajimalpa') {
         $claseColor2 = 'cuajimalpa';
 } elseif ($valor2 == 'iztapalapa') {
     $claseColor2 = 'iztapalapa';
 } elseif ($valor2 == 'lerma') {
     $claseColor2 = 'lerma';
 } elseif ($valor2 == 'xochimilco') {
      $claseColor2 = 'xochimilco';
 }


 try {
    $query = "SELECT * FROM egresados_multimedia where matricula=$matricula"; // Reemplaza 'tu_tabla' con el nombre real de la tabla
    $stmt = $db->query($query);
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
} catch (PDOException $e) {
    echo "Error de consulta: " . $e->getMessage();
}

function separaArreglo($cadena){
	
	$campos = explode('|', $cadena);
	$respuesta[] = ['matricula' =>$campos[2], 'rfc'=>$campos[3], 'nombre'=>$campos[4], 'numero'=>$campos[5], 'grado'=>$campos[6], 'numero_dos'=>$campos[7], 'plan'=>$campos[8], 'unidad'=>$campos[9], 'egreso'=>$campos[10], 'estado'=>$campos[11], 'nomgra'=>$campos[12]];
	$respuesta[] = ['matricula' =>$campos[12], 'rfc'=>$campos[13], 'nombre'=>$campos[14], 'numero'=>$campos[15], 'grado'=>$campos[16], 'numero_dos'=>$campos[17], 'plan'=>$campos[18], 'unidad'=>$campos[19], 'egreso'=>$campos[20], 'estado'=>$campos[21], 'nomgra'=>$campos[22]];
	//$respuesta[] = ['matricula' =>$campos[22], 'rfc'=>$campos[23], 'nombre'=>$campos[24], 'numero'=>$campos[25], 'grado'=>$campos[26], 'numero_dos'=>$campos[27], 'plan'=>$campos[28], 'unidad'=>$campos[29], 'egreso'=>$campos[30], 'estado'=>$campos[31], 'nomgra'=>$campos[32]];


    
    echo "<div class='li'   >" . $campos[8] . "</div>";
    echo "<div class='ma'   >" . $campos[18] . "</div>";
    echo "<div class='eg'   >" . $campos[10] . "</div>";    
    echo "<div class='egm'   >" . $campos[20] . "</div>";    
	return $respuesta;
}

$datos = separaArreglo($client->__getLastResponse());
while ($dato = $stmt->fetch(PDO::FETCH_ASSOC)) {
    
?>
     <div class="contenedor">
        <img class="foto" name="foto"  src="data:image/jpg;base64,<?php echo base64_encode($dato["foto"]); ?>" alt="">
        <h3> <input class="nombre" type="text" name="nombre" id="" value="<?php echo $dato["nombre"] ?>" style="border:none;" disabled></h3>
        <h3> <input class="folio"  type="text" name="" id="" value="<?php echo $dato["id"]; ?>" style="border:none;" disabled></h3>
        <img class="matricula"  src="data:image/jpg;base64,<?php echo base64_encode($dato["codigo"]); ?>" alt=""></center>
        <h3> <input class="egresado" type="text" name="egresado" id="" value="<?php echo $dato["estado"] ?>" disabled></h3>
        <h3> <input class="unidad  <?php echo $claseColor; ?>"  type="text" name="" id="" style="border:none; " disabled></h3>
        <img class="firma"  src="data:image/jpg;base64,<?php echo base64_encode($dato["firma"]); ?>" alt=""></center>
        <h3> <input class="vigencia"  type="text" name="" id="" value="<?php echo $dato["vigencia"]; ?>" style="border:none;" disabled></h3>
        <h3> <input class="fec_emision"  type="text" name="" id="" value="<?php echo $dato["fec_emision"]; ?>" style="border:none;" disabled></h3>
       
        <h3> <input class="unidad2  <?php echo $claseColor; ?>"  type="text" name="" id="" style="border:none; " disabled></h3>
               
     </div>
<?php
                  } //mysqli_free_result($resultado);
                
				?>

<div class="unidad">
            <style>
            .unidad{
                width:414px;
                height: 70px;;
                background: $valor;
                position:relative;
                top:-370px;
                right:;
                left:617px;
                bottom:50px;
                border-radius: 5px 0px 0px 5px;
            }
            </style>
        </div>

        <div class="unidad2">
            <style>
            .unidad2{
                width:414px;
                height: 70px;;
                background: $valor;
                position:relative;
                top:-530px;
                right:;
                left:617px;
                bottom:50px;
                border-radius: 5px 0px 0px 5px;
            }
            </style>
        </div>


    <div class="foto">
            <style>
            .foto{
                width:238px;
                height: 305px;;
                position:relative;
                top:97px;
                right:0px;
                left:276px;
                bottom:50px;
                border-radius: 5px 5px 5px 5px;
            }
            </style>
        </div>

            <div class="egresado">
            <style>
            .egresado{
                position:relative;
                font-size:40px;
                top:-430px;
                right:0px;
                left:290px;
                bottom:50px;
                border-radius: 5px 5px 5px 5px;
                border:none;
                background: none;
            }
            </style>
        </div>
        

            <div class="nombre">
            <style>
            .nombre{
                width:500px;
                height: 20px;
                background: none;
                position:relative;
                font-size:23px;
                top:190px;
                right:0px;
                left:230px;
                bottom:50px;
                border-radius: 5px 5px 5px 5px;
                
            }
            </style>
        </div>

               <div class="matricula">
            <style>
            .matricula{
                width:210px;
                height: 50px;
                background: none;
                position:relative;
                top:210px;
                left:289px;
                border-radius: 5px 5px 5px 5px;
                
            }
            </style>
        </div>

        <div class="firma">
            <style>
            .firma{
                width: 220px;
                height: 80px;;
                background: none;
                border: none;
                position:relative;
                top:-562px;
                right:0px;;
                left:918px;
                bottom:0px;
                border-radius: 7px 7px 7px 7px;
              
            }
            </style>
        </div>

        
        <div class="vigencia">
            <style>
            .vigencia{
                width: 190px;
                height: 42px;;
                background: none;
                position:relative;
                font-size:15px;
                top:-43px;
                right:;
                left:970px;
                bottom:;
                border-radius: 0px 5px 5px 0px;
            }
            </style>
        </div>

           <div class="folio">
            <style>
            .folio{
                width: 190px;
                height: 42px;;
                background: none;
                position:relative;
                font-size:15px;
                top:198px;
                right:;
                left:1073px;
                bottom:px;
                border-radius: 0px 5px 5px 0px;
            }
            </style>
        </div>

         <div class="fec_emision">
            <style>
            .fec_emision{
                width: 190px;
                height: 42px;;
                background: none;
                position:relative;
                font-size:15px;
                top:-94px;
                right:;
                left:1050px;
                bottom:93px;
                border-radius: 0px 5px 5px 0px;
            }
            </style>
        </div>

    <div class="carrera">
            <style>
            .carrera{
                width: 190px;
                height: 42px;;
                background: none;
                color: white;
                border: none;
                position:relative;
                font-size:10px;
                top:10px;
                right:150px;;
                left:;
                bottom:50px;
                z-index:1;
                border-radius: 7px 7px 7px 7px;
              
            }
            </style>
        </div>


        <style>
.li{
    width: 600px;
    height: 37px;;
    font-size:15px;
    background: none;
    border:none;
    color:white;
    position:relative;
    top:290px;
    right:;
    left:700px;
    bottom: 15px;
    border-radius: 0px -5px 1px 0px;
    z-index:1;
}

.ma{
    width: 600px;
    height: 37px;;
    font-size:15px;
    background: none;
    border:none;
    color: white;
    position:relative;
    top:350px;
    right:;
    left:700px;
    bottom: 15px;
    border-radius: 0px -5px 1px 0px;
    z-index:1;
}

</style>

<style>
.eg{
    width: 163px;
    height: 37px;;
    font-size:15px;
    background: none;
    border:none;
    color: black;
    position:relative;
    top:220px;
    right:px;
    left:1065px;
    bottom: 15px;
    border-radius: 0px -5px 1px 0px;
    z-index:1;
}

.egm{
    width: 163px;
    height: 37px;;
    font-size:15px;
    background: none;
    border:none;
    color: black;
    position:relative;
    top:280px;
    right:72px;
    left:1065px;
    bottom: 15px;
    border-radius: 0px -5px 1px 0px;
    z-index:1;
}


</style>



 



    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    
    
    
</body>

</html>