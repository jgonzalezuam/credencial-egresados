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
    <link rel="stylesheet" href="css/diseno_1.css">
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
       <div class="container-xxl py-5" onclick="printHTML()">
            <div class="container">
                <div class="row g-5">
                   
                    <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s" >
                        <div class="position-relative h-100">
                            <img class="img-fluid position-absolute"  src="img/diseno_1.png" alt="" style="object-fit: cover;">
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

$valor = $_POST['unidad']; 
$claseColor = '';
               
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

try {
    $query = "SELECT * FROM egresados_multimedia where matricula=$matricula"; // Reemplaza 'tu_tabla' con el nombre real de la tabla
    $stmt = $db->query($query);
} catch (PDOException $e) {
    echo "Error de consulta: " . $e->getMessage();
}
while ($dato = $stmt->fetch(PDO::FETCH_ASSOC)) {
    
?>
     <img class="foto" name="foto"  src="data:image/jpg;base64,<?php echo base64_encode($dato["foto"]); ?>" alt="">
                <br>
               <h3> <input class="nombre" type="text" name="nombre" id="" value="<?php echo $dato["nombre"] ?>" style="border:none;" disabled></h3>
                <br>
                <center><img class="matricula"  src="data:image/jpg;base64,<?php echo base64_encode($dato["codigo"]); ?>" alt=""></center>
                <br>

                   <h3> <input class="egresado" type="text" name="egresado" id="" value="<?php echo $dato["estado"] ?>" disabled></h3>
                <br>
                <h3> <input class="unidad  <?php echo $claseColor; ?>"  type="text" name="" id="" style="border:none; " disabled></h3>

<?php
                  } //mysqli_free_result($resultado);
                
				?>
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    
    
    <div class="unidad">
            <style>
            .unidad{
                width:50px;
                height: 70px;;
                background: $valor;
                position:relative;
                top:-160px;
                right:;
                left:630px;
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
                top:246px;
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
                top:-290px;
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
                font-size:25px;
                top:325px;
                right:10px;
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
                top:370px;
                left:-281px;
                border-radius: 5px 5px 5px 5px;
                
            }
            </style>
        </div>

</body>


           

</html>

<script>
    function printHTML() {
      if (window.print) {
        window.print();
      }
    }
    </script>