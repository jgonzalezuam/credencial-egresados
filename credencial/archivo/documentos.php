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
           <!-- <a class="navbar-brand js-scroll-trigger" ><img src="../img/Logo_Vinculación.png" alt="" ></a>-->
           
           
        </div>
    </nav>
    <br>
        <form class="m-auto w-50 mt-2 mb-2 p-5" method="POST" enctype="multipart/form-data" action="acciones/insertar_documentos.php">
           
            <div class="mb-2">
                <label class="form-label">Selecciona un archivo</label>
                <input class='form-control form-control-sm' type="file" name="archivo_uno" required>
                <label class="form-label"><h6><strong>Nota: Solo se permite archivos en formato pdf</strong></h6></label>
            </div>
            <div class="mb-2">
                <label class="form-label">Selecciona un archivo</label>
                <input class='form-control form-control-sm' type="file" name="archivo_dos" required>
                <label class="form-label"><h6><strong>Nota: Solo se permite archivos en formato pdf</strong></h6></label>
            </div>
            <div class="mb-2">
                <label class="form-label">Selecciona un archivo</label>
                <input class='form-control form-control-sm' type="file" name="archivo_tres" required>
                <label class="form-label"><h6><strong>Nota: Solo se permite archivos en formato pdf</strong></h6></label>
            </div>
            <div class="mb-2">
                <label class="form-label">Selecciona un archivo</label>
                <input class='form-control form-control-sm' type="file" name="archivo_cuatro" required>
                <label class="form-label"><h6><strong>Nota: Solo se permite archivos en formato pdf</strong></h6></label>
            </div>
            <div class="mb-2">
                <label class="form-label">Selecciona un archivo</label>
                <input class='form-control form-control-sm' type="file" name="archivo_cinco" required>
                <label class="form-label"><h6><strong>Nota: Solo se permite archivos en formato pdf</strong></h6></label>
            </div>
            <div class="mb-2">
                <label class="form-label">Selecciona un archivo</label>
                <input class='form-control form-control-sm' type="file" name="archivo_seis" required>
                <label class="form-label"><h6><strong>Nota: Solo se permite archivos en formato pdf</strong></h6></label>
            </div>
            <center><button class="btn btn-dark text-center btn-sm mb-1">Cargar archivos</button></center>



            
        </form>
        


    </div>
    

<script src="bootstrap/bootstrap.bundle.min.js"></script>


</body>
</html>