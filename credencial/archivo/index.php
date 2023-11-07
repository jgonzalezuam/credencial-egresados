<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cargar documentos</title>
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <link rel="icon" type="imagen/x-icon" href="../img/variacion1.jpg">
</head>
<body>
    <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container"  >
        <a class="navbar-brand js-scroll-trigger" ><img src="../img/variacion6.png" alt=""></a>
        <a class="navbar-brand js-scroll-trigger" ><img src="../img/egresados.png" alt="" style="height:65px;"></a>
           
           
        </div>
    </nav>
    <br>
        <form class="m-auto w-50 mt-2 mb-2 p-5" method="POST" enctype="multipart/form-data" action="acciones/insertar.php">
            <div class="mb-2">
                <label class="form-label">Matrícula:</label>
                <input class='form-control form-control-sm' type="number" name="matricula" required> 
            </div>
            
            <div class="mb-2">
                <label class="form-label">Nombre Completo:</label>
                <input class='form-control form-control-sm' type="text" name="nombre" required> 
            </div>

            <div class="mb-2">
                <label class="form-label">RFC:</label>
                <input class='form-control form-control-sm' type="text" name="rfc" maxlength="13" required> 
            </div>
           
            <div class="mb-2">
                <label class="form-label">Unidad</label>
                <select class="form-select col-12" style="font-size: 13px;" type="text" name="unidad" id="unidad" required>
                <option value="">Selecciona la Unidad </option>
                       <option value="AZCAPOTZALCO">AZCAPOTZALCO</option>
                        <option value="CUAJIMALPA">CUAJIMALPA</option>
                        <option value="IZTAPALAPA">IZTAPALAPA</option>                        
                        <option value="LERMA">LERMA</option>
                        <option value="XOCHIMILCO">XOCHIMILCO</option>
                        </select>
            </div>
            
                <div class="mb-2">
                <label class="form-label">Proceso</label>
                <select class="form-select col-12" style="font-size: 13px;" name="proceso" required>
                        <!--<option selected>En que proceso se encuentra tu documento </option>
                        <option value="INICIO DEL PROCESO">INICIO DEL PROCESO</option>-->
                        <option selected value="REVISION">REVISION</option>           
                      <!--  <option value="APROBADO">APROBADO</option>
                        <option value="RECHAZADO">RECHAZADO</option>-->       
                    </select>
            </div>
            <div class="mb-2">
                <label class="form-label">Selecciona un archivo</label>
                <input class='form-control form-control-sm' type="file" name="archivo" required>
                <label class="form-label"><h6><strong>Nota: Solo se permite archivos en formato pdf</strong></h6></label>
            </div>
            <center><button class="btn btn-dark text-center btn-sm mb-1">Cargar archivo</button></center>



            
        </form>
        


    </div>
    

<script src="bootstrap/bootstrap.bundle.min.js"></script>

</body>
</html>