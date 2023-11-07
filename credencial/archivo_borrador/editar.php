<?php 
    $id=$_GET['id'];
    include 'config/bd.php';
    $conexion=conexion();
    $datos=datos($conexion,$id);
    $nombre=$datos['nombre'];
    $categoria=$datos['categoria'];
    $titulo=$nombre.'.'.$categoria;
    $tipo=$datos['tipo'];
    $archivo=$datos['archivo'];
    $proceso=$datos['proceso'];
    $unidad=$datos['unidad'];
    $rfc=$datos['rfc'];
    $matricula=$datos['matricula'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualización</title>
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
</head>
<body>
    <div class="container">
            <form class="m-auto w-50 mt-2 mb-2" method="POST" enctype="multipart/form-data" action="acciones/editar.php">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <h3 class="text-center"><?php echo $titulo; ?></h3>
                <div class="mb-2">
                    <label class="form-label">Matrícula:</label>
                    <input class='form-control form-control-sm' type="number" name="matricula" value="<?php echo $matricula ;?>">
                </div>
                <div class="mb-2">
                    <label class="form-label">Nombre completo:</label>
                    <input class='form-control form-control-sm' type="text" name="nombre" value="<?php echo $nombre ;?>">
                </div>
                <div class="mb-2">
                    <label class="form-label">RFC:</label>
                    <input class='form-control form-control-sm' type="text" name="rfc" value="<?php echo $rfc ;?>">
                </div>
                <div class="mb-2">
                    <label class="form-label">Unidad:</label>
                    <input class='form-control form-control-sm' type="text" name="unidad" value="<?php echo $unidad ;?>">
                </div>
                <div class="mb-2">
                <label class="form-label">Proceso</label>
                <select class="form-select col-12" style="font-size: 13px;" name="proceso" required>
                        <!--<option selected>En que proceso se encuentra tu documento </option>
                        <option value="INICIO DEL PROCESO">INICIO DEL PROCESO</option>-->
                        <option selected value="REVISION">REVISIÓN</option>           
                      <option value="APROBADO">APROBADO</option>
                        <option value="RECHAZADO">RECHAZADO</option>      
                    </select>
                </div>
                <div class="mb-2">
                    <label class="form-label">Selecciona un archivo</label>
                    <input class='form-control form-control-sm' type="file" name="archivo">
                </div>
                <button class="btn btn-primary btn-sm">Actualizar archivo</button>
                <a class="btn btn-warning btn-sm" href="muestra_archivos.php">Regresar</a>
            </form>
            <div class="m-auto w-75 mt-2 text-center">
                <?php 
                    $valor="";
                    if($categoria=='pdf'){
                        $valor="<iframe class='w-100' height='500' src='data:".$tipo.";base64,".base64_encode($archivo)."' frameborder='0'></iframe>";
                    }
                    if($categoria=='png' || $categoria=='jpg'){
                        $valor="<img src='data:".$tipo.";base64,".base64_encode($archivo)."' >";
                    }
                    if($categoria=='mp4' || $categoria=='mp3'){
                        $valor="<video class='m-auto' controls='true' src='data:".$tipo.";base64,".base64_encode($archivo)."'></video>";
                    }
                    
                    echo $valor;
                
                ?>
            </div>

    </div>
    <script src="bootstrap/bootstrap.bundle.min.js"></script>
</body>
</html>