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
    <link href="css/creative.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="shortcut icon" href="img/variacion1.jpg" type="image/x-icon">

  

    <title>Comprobante de Pago Credencial de Egresado</title>

    <script> 
        function mayus(e) {
    e.value = e.value.toUpperCase();
        }
    </script>
            
</head>

<body id="page-top"> 

    <!-- Contenido-->
    <section class="mt-5">

        <div class="container ">
            <div class="form-row">
                <div class="col-md-6 ">
                    <br> <img src="img/variacion6.png" alt="">
                </div>
                <div class="col-md-3 ">
                </div>
                <div class="col-md-3 ">
                    <br> <img src="img/egresados.png" style="width: 200px;" alt="">
                </div>
            </div>
        </div>
 
    <!-- Inicia Formulario-->

     <form  action="capturar2.php" method="POST" class="form-inline" enctype="multipart/form-data">
     <div class="container ">
        <div class="form-row">
           <div class="form-group col-md-7 mb-1">

            </div>

            <div class="form-group col-md-5 mb-1 py-4">
                    <label for="">Fecha: </label> &nbsp;
                    <input type="date" class="form-control" name="fec_recepcion" id="fec_recepcion"  placeholder="" >
            </div>

            
            <div class="form-group col-md-12 mb-1 ">
                    <label for=""> Nombre: </label> &nbsp; &nbsp;
                    <input type="text" class="form-control col-md-11" name="nombre" id="nombre" onkeyup="mayus(this);" placeholder="" >
            </div>

             <div class="form-group col-md-12 mb-1 ">
                    <label for=""> Matrícula: </label> &nbsp;
                    <input type="text" class="form-control col-md-11" name="matricula" id="matricula"  placeholder="" >
            </div>

            <div class="form-group col-md-12 mb-1 ">
                    <label for=""> Correo Electrónico: </label> &nbsp; &nbsp;
                    <input type="text" class="form-control col-md-10" name="correo" id="correo"  placeholder="" >
            </div>

             <div class="form-group col-md-12 mb-1 ">
                    <label for=""> Programa Académico: </label> &nbsp; &nbsp;
                    <input type="text" class="form-control col-md-9" name="programa" id="programa"  placeholder="" >
            </div>

            <div class="form-group col-md-12 mb-1 ">
                    <label for=""> Pago de emisión de Credencial de Egresado por la cantidad de &nbsp;<strong> $200.00 (doscientos pesos 00/100)</strong> </label> 
            </div>

               <div class="form-group col-md-12 mb-1 ">
                    <label for=""> Proyecto &nbsp;<strong> 31201021</strong> </label> 
            </div>

        </div>
    </div>
    </form>         
    
    <!-- Primera Fila -->
          
        </div> 
        
    </section>





    <!-- Footer -->
   <!-- <footer class="bg-dark fixed-bottom py-1">
        <div class="container">

            <div class="small text-center text-white">Universidad Autónoma Metropolitana</div>
        </div>
    </footer>-->

    <!-- Bootstrap y JavaScript -->
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/creative.min.js"></script>

     <script src="js/jspdf.min.js"></script> 



 
</body>
<div class="col-md-12 text-center"> 
        <button class="btn btn-dark" onclick="printHTML()">Generar comprobante</button><br><br>
    </div>

<script>
    function printHTML() {
      if (window.print) {
        window.print();
      }
    }
    </script>


    <script src="js/funciones.js"></script>
    <script src="js/main.js"></script>

 
   
</html>

