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

    <title>Creación de registro</title>

    <script>
        function Validar(f) { 
            if (f.email.value == ""){
            alert("Proporciona el Email"); 
            f.email.focus(); 
            return (false); 
            }

            if (f.password.value.length <= 5) {
                alert("Introduce la contraseña correcta de mínimo 6 caracteres."); 
                f.password.focus(); 
                return (false); 
            }

                if (f.password_2.value.length <= 5) {
                alert("Introduce la contraseña correcta de mínimo 6 caracteres."); 
                f.password_2.focus(); 
                return (false); 
            }
          

        }
    </script>
            
</head>

<body id="page-top">


    <!-- Menú de Navegación -->
    <nav class="navbar navbar-expand-lg navbar-light py-3">
        <div class="container"  >
            <a class="navbar-brand js-scroll-trigger" ><img src="img/variacion6.png" alt=""></a>
            <a class="navbar-brand js-scroll-trigger" ><img src="img/congreso.png" alt="" width="270px"></a>
            <a class="navbar-brand js-scroll-trigger" ><img src="img/cemefi.png" alt="" width="150px"></a>
        </div>
    </nav>

    <!-- Cabecera-->
    <section class="">
        <div class="container-fluid bg-dark text-white">

            <div class="col-lg-12 border">
                <h2 class="text-center pt-3 pb-3">Congreso de Investigación sobre el Tercer Sector</h2>

            </div>
        </div>
    </section>


    <!-- Contenido-->
    <section class="mt-5">



        <div class="container ">


            <div class="row">
                <div class="col-md-10 ">
                    <h2 class="pb-3">Registro </h2>
                </div>
            </div>


            <div class="row  ">

                <div class="col-md-12 ">
                    <!-- Inicia Formulario-->
        <!-- Primera Fila -->
    <form autocomplete="on" method="POST" action="registrar.php" onsubmit="return Validar(this);">
        <div class="form-row">

            <div class="form-group-4 col-md-4">
                    <label for="">Elige el rol con el que asistirás al Congreso: </label> <br>
                    <select class="form-control col-12"  name="rol" required>
                        <option selected >Selecciona una opción</option>           
                        <option value="Ponente">Ponente</option>
                        <option value="Moderador">Moderador</option>
                        <option value="Panelista">Panelista</option>    
                        <option value="Asistente general">Asistente general</option>       
                    </select>
            </div>

            <div class="form-group-4 col-md-4">
                    <label for="">¿Cuál es tu ocupación? </label> <br>
                    <select class="form-control col-12"  name="ocupacion" required>
                        <option selected >Selecciona una opción</option>           
                        <option value="Docente">Docente</option>
                        <option value="Investigador">Investigador</option>
                        <option value="Estudiante">Estudiante</option>    
                        <option value="Integrante de una OSC">Integrante de una OSC</option>
                        <option value="Integrante de una empresa">Integrante de una empresa</option>
                        <option value="Funcionario de gobierno">Funcionario de gobierno</option>    
                        <option value="Otra">Otra</option>       
                    </select>
            </div>
            

             <div class="form-group-4 col-md-4">
                    <label for="">Nombre completo:</label> 
                    <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Escribe tu Nombre Completo" >
            </div>

             <div class="form-group-4 col-md-4 p-2">
                    <label for="">Nombre de la institución en la que colaboras:</label> 
                    <input type="text" class="form-control" name="institucion" id="institucion" placeholder="Escribe la institución" >
            </div> 

            <div class="form-group-4 col-md-4 p-2">
                    <label for="">Elige el estado en el que resides </label> <br>
                    <select class="form-control col-12"  name="estado" required>
                        <option selected >Elige una opción</option>  
                        <option value="Aguascalientes">Aguascalientes</option>
                        <option value="Baja California">Baja California</option>
                        <option value="Baja California Sur">Baja California Sur</option>
                        <option value="Campeche">Campeche</option>
                        <option value="Chiapas">Chiapas</option>
                        <option value="Chihuahua">Chihuahua</option>
                        <option value="CDMX">Ciudad de México</option>
                        <option value="Coahuila">Coahuila</option>
                        <option value="Colima">Colima</option>
                        <option value="Durango">Durango</option>
                        <option value="Estado de México">Estado de México</option>
                        <option value="Guanajuato">Guanajuato</option>
                        <option value="Guerrero">Guerrero</option>
                        <option value="Hidalgo">Hidalgo</option>
                        <option value="Jalisco">Jalisco</option>
                        <option value="Michoacán">Michoacán</option>
                        <option value="Morelos">Morelos</option>
                        <option value="Nayarit">Nayarit</option>
                        <option value="Nuevo León">Nuevo León</option>
                        <option value="Oaxaca">Oaxaca</option>
                        <option value="Puebla">Puebla</option>
                        <option value="Querétaro">Querétaro</option>
                        <option value="Quintana Roo">Quintana Roo</option>
                        <option value="San Luis Potosí">San Luis Potosí</option>
                        <option value="Sinaloa">Sinaloa</option>
                        <option value="Sonora">Sonora</option>
                        <option value="Tabasco">Tabasco</option>
                        <option value="Tamaulipas">Tamaulipas</option>
                        <option value="Tlaxcala">Tlaxcala</option>
                        <option value="Veracruz">Veracruz</option>
                        <option value="Yucatán">Yucatán</option>
                        <option value="Zacatecas">Zacatecas</option>
                </select>
            </div>

     
            <div class="form-group-4 col-md-4 p-2">
                    <label for="">Correo Electrónico:</label> 
                    <input type="email" class="form-control" name="email" id="email" placeholder="Escribe tu Correo Electrónico">
            </div>

            <div class="form-group-4 col-md-4">
                    <label for="">Elige tu modalidad de participación: </label> <br>
                    <select class="form-control col-12"  name="modalidad" required>
                        <option selected >Elige una opción</option>           
                        <option value="Virtual">Virtual</option>
                        <option value="Presencial">Presencial</option>        
                    </select>
            </div>

            <div class="form-group-4 col-md-4">
                    <label for="">Elige el o los días en los que estarás participando: </label> <br>
                    <select class="form-control col-12"  name="dia" required>
                        <option selected >Elige una opción</option>           
                        <option value="Miercoles 7 de junio">Miércoles 7 de junio</option>
                        <option value="Jueves 8 de junio">Jueves 8 de junio</option>  
                        <option value="Ambos">Ambos</option>       
                    </select>
            </div>      
   
       
            <div class="form-group-4 col-md-4 text-right "> <br><br>
             <button class="btn btn-dark text-white" type="Submit" name="Submit" value="Enviar">Crear registro</button>
         </div>

        </div>
    
    </form>
</div>
                
                    <!-- Termina Formulario -->
                </div>
            </div>
        </div>
    </section>


    <!-- Footer -->
    <footer class="bg-dark fixed-bottom py-1">
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