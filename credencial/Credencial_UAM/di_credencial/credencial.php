<!DOCTYPE html>
<html lang="en">

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
			   include("../conexion.php");
			   $productos= "SELECT * FROM egresados";
          ?>

				<?php 
					$resultado = mysqli_query($conexion, $productos);
					while($dato=mysqli_fetch_assoc($resultado)){
				?>
    <section class="card">
        <div class="card__perfil">
            <div class="card__nombre">
                <br><br><br> <br><br>
                <img name="foto" width="70px" height="70px" src="data:image/jpg;base64,<?php echo base64_encode($dato["foto"]); ?>" alt="">
                <br>
               <h3> <input style=" background:white; color:black; font-size:16px; text-aling:center;" type="text" name="nombre" id="" value="<?php echo $dato["nombre"]; ?>" style="border:none;" disabled></h3>
                <br>
                <center><img style="width:100px;  height: 23px"  src="data:image/jpg;base64,<?php echo base64_encode($dato["barra"]); ?>" alt=""></center>
            </div>
            <!--<div class="card__button">
                <a class="enlace" href="#">Girar</a>
            </div>-->
        </div>
       
        <?php
                  } mysqli_free_result($resultado);
                
				?>
					
    </section>

    <script src="js/main.js"></script>
</body>

</html>