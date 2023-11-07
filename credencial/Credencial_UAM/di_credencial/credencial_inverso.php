<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Credencial de Egresada y Egresado UAM</title>
    <link rel="stylesheet" href="css/estilos_1.css">
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
			   $productos= "SELECT * FROM egresados_credencial";
          ?>

				<?php
					$resultado = mysqli_query($conexion, $productos);
					while($dato=mysqli_fetch_assoc($resultado)){
				?>
    <section class="card">
        <div class="card__perfil">
            <div class="card__nombre">
                <br><br><br> <br><br>
                <img style="width:70px; height:50px;" src="data:image/jpg;base64,<?php echo base64_encode($dato["firma"]); ?>" alt="">
                <br>
               <h3> <input style="width:200px; background:white; color:black; font-size:13px; text-aling:center;" type="text" name="" id="" value="<?php echo $dato["plan"]; ?>" style="border:none;" disabled></h3>
                <br>
                <h3> <input style="width:200px; background:white; color:black; font-size:13px; text-aling:center;" type="text" name="" id="" value="<?php echo $dato["egreso"]; ?>" style="border:none;" disabled></h3>
                <br>
                <img style="width:30px; height:30px;" src="data:image/jpg;base64,<?php echo base64_encode($dato["qr"]); ?>" alt="">
                <br>
              
            </div>
           <br>
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