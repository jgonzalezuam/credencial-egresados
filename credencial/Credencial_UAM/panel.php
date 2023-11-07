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
    <link rel="shortcut icon" href="img/variacion1.jpg" type="image/x-icon">
    <title>Solicitud de Pago</title>    
    <script> 
    function Validar(f) { 
        if (f.email.value == "") {
             alert("Introduce el Email, por favor.");
              f.email.focus(); 
              return (false);
               } 
               if (f.password.value.length <= 6)    { 
                   alert("Introduce la contraseña correcta de mínimo 6 caracteres.");
                f.password.focus(); 
                return (false);
                 } 
                return (true); 
                } 
                </script>

</head>

<body id="page-top">


    <!-- Menú de Navegación -->
    <nav class="navbar navbar-expand-lg navbar-light py-3">
        <div class="container"  >
            <a class="navbar-brand js-scroll-trigger" ><img src="img/variacion6.png" alt=""></a>
            <a class="navbar-brand js-scroll-trigger" ><img src="img/Logo_Vinculación.png" alt=""></a>
            <a class="navbar-brand js-scroll-trigger" ><img src="img/egresados.png" width="200px" alt=""></a>
          
        </div>
    </nav>
    <!-- Termina Menú de Navegación -->

    <!-- Cabecera-->
    <section class="">
        <div class="container-fluid bg-dark text-white">

            <div class="col-lg-12 border">
                <h2 class="text-center pt-3 pb-3">Credencial de Egresados</h2>

            </div>
        </div>
    </section>
    <!-- Termina Cabecera-->

    <!-- Contenido-->
    <section class="mt-5">
        <div class="container">

            <div class="row">
                <div class="col-md-10 ">
                    <h2 class="pb-3">Solicitud de Pago</h2>
                </div>
                
            </div>
            
                    <!-- Inicia Temario -->                                        
                        
                    
                      <!-- Inicia la segunda fila del formulario -->
                     <!-- <form autocomplete="on" method="POST" action="php/sesion.php" onsubmit="return Validar(this);">

                       <div class="form-row"> 
                       <div class="form-group col-md-4"> 
                       <label>Correo Electrónico: </label> 
                       <input type="email" class="form-control" id="email" name="email" placeholder="Escribir correo electrónico"> 
                       </div>

                       <div class="form-group col-md-4"> 
                       <label>Contraseña: </label> 
                       <input type="password" class="form-control" id="password" name="password" placeholder="Escribir contraseña"> 
                       </div>

                       <div class="form-group col-md-4 text-center mt-4"> 
                       <button class="btn btn-dark text-white" type="submit" name="Submit" value="Enviar">Acceder</button> 
                       </div>
                        </div> 
                        </form>-->

                        <br><br><br><br>
                        <div class="form-group col-md-12 text-center mt-4"> 
                       <a class="form-group col-md-12" href="ticket/azcapotzalco.php" ><button style="background: #CD032E;" class="btn  text-white" type="submit" name="Submit" value="Enviar">Azcapotzalco</button> </a>
                       <a class="form-group col-md-12" href="ticket/cuajimalpa.php" ><button style="background: #F08200;" class="btn  text-white" type="submit" name="Submit" value="Enviar">Cuajimalpa</button> </a>
                       <a class="form-group col-md-12" href="ticket/iztapalapa.php" ><button style="background: #57A519;" class="btn  text-white" type="submit" name="Submit" value="Enviar">Iztapalapa</button> </a>
                       <a class="form-group col-md-12" href="ticket/lerma.php" ><button style="background: #AD25A8;" class="btn  text-white" type="submit" name="Submit" value="Enviar">Lerma</button> </a>
                       <a class="form-group col-md-12" href="ticket/xochimilco.php" ><button style="background: #0072CE;" class="btn text-white" type="submit" name="Submit" value="Enviar">Xochimilco</button> </a>
                       </div>
                          
                    <!-- Termina Temario -->
                </div>
            </div>
        </div>
    </section>
    <!-- Termina Contenido-->

    <!-- Footer -->
    <footer class="bg-dark fixed-bottom py-3">
        <div class="container">

            <div class="small text-center text-white">Universidad Autónoma Metropolitana</div>
        </div>
    </footer>

    <!-- Bootstrap y JavaScript -->
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/creative.min.js"></script>

</body>

</html>