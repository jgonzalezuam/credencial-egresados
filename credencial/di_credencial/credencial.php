<?php
$conexion =  mysqli_connect("localhost", "root", "", "credencial_egresado");
mysqli_set_charset($conexion,"utf8");
//if ($conexion) {
  // echo "Conexion Exitosa";
//}else {
  //  echo "Error en conexion";
//}

$matricula = $_POST['matricula'];  

$valor = $_POST['unidad'];  
//$valor = '$unidAD; // Este valor puede ser dinámico

// Definir una variable para la clase CSS
$claseColor = '';
?>



<!DOCTYPE html>
<html lang="en">
<style>
        /* Define clases de colores para el fondo del input */
        .azcapotzalco { background-color: #CD032E; }        
        .cuajimalpa { background-color: #F08200; }
        .iztapalapa { background-color: #57A519; }        
        .lerma { background-color: #AD25A8; }
        .xochimilco { background-color: #0072CE; }
    </style>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Credencial de Egresada y Egresado UAM</title>
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/dark.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">

    <script src="https://kit.fontawesome.com/03a89292db.js" crossorigin="anonymous"></script>
</head>

<body class="">

    <h1>Credencial de Egresada y Egresado UAM</h1>
    <!-- <div class="modo" id="modo">
        <i class="fas fa-toggle-on"></i>
    </div> -->
    <?php
			   
               $productos= "SELECT * FROM egresados_multimedia where matricula=$matricula";
               
               
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
          ?>

				<?php 
					$resultado = mysqli_query($conexion, $productos);
					while($dato=mysqli_fetch_assoc($resultado)){
				?>
    <section class="card" onclick="printHTML()">
        <div class="card__perfil">
            <div class="card__nombre">
                <br><br><br> <br><br>
                <img class="foto" name="foto"  src="data:image/jpg;base64,<?php echo base64_encode($dato["foto"]); ?>" alt="">
                <br>
               <h3> <input class="nombre" type="text" name="nombre" id="" value="<?php echo $dato["nombre"] ?>" style="border:none;" disabled></h3>
                <br>
                <center><img class="matricula"  src="data:image/jpg;base64,<?php echo base64_encode($dato["codigo"]); ?>" alt=""></center>
                <br>

                   <h3> <input class="egresado" type="text" name="egresado" id="" value="<?php echo $dato["estado"] ?>" disabled></h3>
                <br>
                <h3> <input class="unidad  <?php echo $claseColor; ?>"  type="text" name="" id="" style="border:none; " disabled></h3>
            </div>
            <!--<div class="card__button">
                <a class="enlace" href="#">Girar</a>
            </div>-->
        </div>
       
        <?php
                  } mysqli_free_result($resultado);
                
				?>
					
    </section>
    <div class="unidad">
            <style>
            .unidad{
                width:25px;
                height: 35px;;
                background: $valor;
                position:relative;
                top:-297px;
                right:;
                left:115px;
                bottom:50px;
                border-radius: 5px 0px 0px 5px;
            }
            </style>
        </div>

    <div class="foto">
            <style>
            .foto{
                width:109px;
                height: 147px;;
                position:relative;
                top:16px;
                right:0px;
                left:0px;
                bottom:50px;
                border-radius: 5px 5px 5px 5px;
            }
            </style>
        </div>

            <div class="egresado">
            <style>
            .egresado{
                width:130px;
                height: 20px;;
                position:relative;
                font-size:25px;
                top:-340px;
                right:0px;
                left:3px;
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
                width:230px;
                height: 20px;
                background: none;
                position:relative;
                font-size: 9.5px;
                top:14px;
                right:10px;
                left:30px;
                bottom:50px;
                border-radius: 5px 5px 5px 5px;
                
            }
            </style>
        </div>

               <div class="matricula">
            <style>
            .matricula{
                width:90px;
                height: 20px;
                background: none;
                position:relative;
                font-size: 10px;
                top:14px;
                right:10px;
                left:0px;
                bottom:50px;
                border-radius: 0px 0px 0px 0px;
                
            }
            </style>
        </div>

            <!--    <div class="color">
            <style>
            .color{
                width:25px;
                height: 30px;
                background: red;
                position:relative;
                font-size:0px;
                top:-517px;
                right:0px;
                left:255px;
                bottom:50px;
                border-radius: 5px 0px 0px 5px;
                
            }
            </style>
        </div>-->


     
          

    <script src="js/main.js"></script>
</body>

</html>

<script>
    function printHTML() {
      if (window.print) {
        window.print();
      }
    }
    </script>
