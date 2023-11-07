<?php session_start();

// Comprobamos tenga sesion, si no entonces redirigimos y MATAMOS LA EJECUCION DE LA PAGINA.
if (isset($_SESSION['usuario'])) {
} else {
	header('Location: login.php');
	die();
}

?>  


<?php
include('../credencial/conexion_1.php');
$matricula = $_POST['matricula'];  

$valor = $_POST['unidad_uno'];  
$valor2 = $_POST['unidad_dos']; 
$valor3 = $_POST['unidad_tres']; 
//$valor = '$unidAD; // Este valor puede ser dinámico

// Definir una variable para la clase CSS
$claseColor = '';
$claseColor2 = '';
$claseColor3 = '';
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
    <link rel="stylesheet" href="css/estilos3.css">
    <link rel="stylesheet" href="css/dark.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">

    <script src="https://kit.fontawesome.com/03a89292db.js" crossorigin="anonymous"></script>
</head>

<body class="">

    <h1>Credencial de Egresada y Egresado UAM</h1>
    <a href="buscador_inverso_tres.php" target="_blank"><button id="btn_cargar_productos" class="btn active" style="background: #333333; color:#ffffff;">Reverso</button></a>
    <!-- <div class="modo" id="modo">
        <i class="fas fa-toggle-on"></i>
    </div> -->
    <?php
			   
            
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

                    if ($valor3 == 'azcapotzalco') {
                        $claseColor3 = 'azcapotzalco';
                    } elseif ($valor3 == 'cuajimalpa') {
                        $claseColor3 = 'cuajimalpa';
                    } elseif ($valor3 == 'iztapalapa') {
                        $claseColor3 = 'iztapalapa';
                    } elseif ($valor3 == 'lerma') {
                        $claseColor3 = 'lerma';
                    } elseif ($valor3 == 'xochimilco') {
                        $claseColor3 = 'xochimilco';
                    }
          ?>

			 <?php 
					try {
                        $query = "SELECT * FROM egresados_digital where matricula=$matricula"; // Reemplaza 'tu_tabla' con el nombre real de la tabla
                        $stmt = $db->query($query);
                    } catch (PDOException $e) {
                        echo "Error de consulta: " . $e->getMessage();
                    }
                    while ($dato = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        
				?>
    <section class="card" onclick="printHTML()">
        <div class="card__perfil">
            <div class="card__nombre">
                <br><br><br> <br><br>
                <img class="foto" name="foto"  src="data:image/jpg;base64,<?php echo base64_encode($dato["foto"]); ?>" alt="">
                <br>
               <h3> <input class="nombre" type="text" name="nombre" id="" value="<?php echo $dato["nombre"] ?>" style="border:none;" disabled></h3>
               <br>
               <h3> <input class="apellido_paterno" type="text" name="apellido_paterno" id="" value="<?php echo $dato["apellido_paterno"] ?>" style="border:none;" disabled></h3>
               <br>
               <h3> <input class="apellido_materno" type="text" name="apellido_materno" id="" value="<?php echo $dato["apellido_materno"] ?>" style="border:none;" disabled></h3>
                <br>
                <h3> <input class="matricula" type="text" name="matricula" id="" value="<?php echo $dato["matricula"] ?>" style="border:none;" disabled></h3>
               <!-- <center><img class="matricula"  src="data:image/jpg;base64,<?php// echo base64_encode($dato["codigo"]); ?>" alt=""></center>-->
                <br>

                   <h3> <input class="egresado" type="text" name="egresado" id="" value="<?php echo $dato["estado"] ?>" disabled></h3>
                <br>
                <h3> <input class="unidad  <?php echo $claseColor; ?>"  type="text" name="" id="" style="border:none; " disabled></h3>
                <br>
                <h3> <input class="unidad2  <?php echo $claseColor2; ?>"  type="text" name="" id="" style="border:none; " disabled></h3>
                <br>
                <h3> <input class="unidad3  <?php echo $claseColor3; ?>"  type="text" name="" id="" style="border:none; " disabled></h3>
            </div>
            <!--<div class="card__button">
                <a class="enlace" href="#">Girar</a>
            </div>-->
        </div>
       
        <?php
                  }
                
				?>
					
    </section>
    <div class="unidad">
            <style>
            .unidad{
                width:25px;
                height: 35px;;
                background: $valor;
                position:relative;
                top:-350px;
                right:;
                left:115px;
                bottom:;
                border-radius: 5px 0px 0px 5px;
            }
            </style>
        </div>

         <div class="unidad2">
            <style>
            .unidad2{
                width:25px;
                height: 35px;;
                background: $valor2;
                position:relative;
                top:-370px;
                right:;
                left:115px;
                bottom:px;
                border-radius: 5px 0px 0px 5px;
            }
            </style>
        </div>

         <div class="unidad3">
            <style>
            .unidad3{
                width:25px;
                height: 35px;;
                background: $valor3;
                position:relative;
                top:-390px;
                right:;
                left:115px;
                bottom:px;
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

         <div class="apellido_paterno">
            <style>
            .apellido_paterno{
                width:230px;
                height: 20px;
                background: none;
                position:relative;
                font-size: 9px;
                top:14px;
                right:10px;
                left:30px;
                bottom:50px;
                border-radius: 5px 5px 5px 5px;
                
            }
            </style>
        </div>

          <div class="apellido_materno">
            <style>
            .apellido_materno{
                width:230px;
                height: 20px;
                background: none;
                position:relative;
                font-size: 9px;
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
                font-size: 15px;
                top:-120px;
                right:px;
                left:8px;
                bottom:;
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
