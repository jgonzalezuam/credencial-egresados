
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seguimiento de registros</title>
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <link rel="icon" type="imagen/x-icon" href="../img/variacion1.jpg">
</head>
<body>
    <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container"  >
        <a class="navbar-brand js-scroll-trigger" ><img src="../img/variacion6.png" alt=""></a>
            <!--<a class="navbar-brand js-scroll-trigger" ><img src="../img/Logo_Vinculación.png" alt="" ></a>-->
           <right><a href="../excel.php" class="navbar-brand js-scroll-trigger" ><button class="btn btn-dark"   type="submit">Generar excel</button></a></right>
           
        </div>
    </nav>
      <br><br>
        <table class="table table-sm table-striped text-center ">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Plan, Programa o Proyecto</th>
                    <th>Tipo de Archivo</th>
                    <th>Archivo</th>
                    <th>Fecha</th>
                    <th>Proceso</th>
                    <th>Unidad</th>
                    <th>División</th>
                    <th>Departamento</th>
                    <th>Fecha de Inicio</th>
                    <th>Fecha de Término</th>
                    <th>Clave aprobación</th>
                    <th>Nombre de la Empresa</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    include 'config/bd.php';
                    $conexion=conexion();
                    $query=listar($conexion);
                    $contador=0;
                    while($datos=mysqli_fetch_assoc($query)){
                        $contador++;
                        $id=$datos['id'];
                        $nombre=$datos['nombre'];
                        $categoria=$datos['categoria'];
                        $fecha=$datos['fecha'];
                        $proceso=$datos['proceso'];
                        $unidad=$datos['unidad'];
                        $coordinacion=$datos['coordinacion'];
                        $departamento=$datos['departamento'];
                        $inicio=$datos['inicio'];
                        $termino=$datos['termino'];
                        $clave=$datos['clave'];
                        $empresa=$datos['empresa'];
                        $estado=$datos['estado'];
                        $archivo=$datos['archivo'];
                        $tipo=$datos['tipo']; 

                    $valor="";
                    if($categoria=='jpg' || $categoria=='png'){
                        $valor="<img width='50' src='data:image/jpg;base64,".base64_encode($archivo)."'>";
                    }

                    if($categoria=='pdf'){
                        $valor="<img  width='50' src='img/pdf.png'>";
                    }

                    if($categoria=='xls' || $categoria=='xlsm' ){
                        $valor="<img  width='50' src='img/exel.png'>";
                    }

                    if($categoria=='doc' || $categoria=='docx'){
                        $valor="<img  width='50' src='img/word.png'>";
                    }
                    if($categoria=='mp4'){
                        $valor="<img  width='50' src='img/desconocido.png'>";
                    }

                    if($categoria=='mp3'){
                        $valor="<img  width='50' src='img/desconocido.png'>";
                    }

                    if($valor==''){
                        $valor="<img  width='50' src='img/desconocido.png'>";
                    }

                    
                ?>
                <tr>
                    <td><?php echo $contador;?></td>
                    <td><?php echo $nombre ;?></td>
                    <td><?php echo $categoria;?></td>
                    <td><a href="cargar.php?id=<?php echo $id; ?>" target="_blank"><?php echo $valor ;?> </a></td>
                    <td><?php echo $fecha ;?></td>
                    <td><?php echo $proceso ;?></td>
                    <td><?php echo $unidad ;?></td>
                    <td><?php echo $coordinacion ;?></td>
                    <td><?php echo $departamento ;?></td>
                    <td><?php echo $inicio ;?></td>
                    <td><?php echo $termino ;?></td>
                    <td><?php echo $clave ;?></td>
                    <td><?php echo $empresa ;?></td>
                    <td><?php echo $estado ;?></td>
                 
                </tr>
                <?php 
                    }
                ?>
            </tbody>
        </table>


    </div>
    
    <div class="m-auto w-75 mt-2 text-center">
                <?php 
                    $valor="";
                    if($categoria=='pdf'){
                        $valor="<iframe class='w-100' height='500' src='data:".$tipo.";base64,".base64_encode($archivo_uno)."' frameborder='0'></iframe>";
                    }
                    if($categoria=='png' || $categoria=='jpg'){
                        $valor="<img src='data:".$tipo.";base64,".base64_encode($archivo)."' >";
                    }
                    if($categoria=='mp4' || $categoria=='mp3'){
                        $valor="<video class='m-auto' controls='true' src='data:".$tipo.";base64,".base64_encode($archivo_uno)."'></video>";
                    }
                    
                    echo $valor;
                
                ?>
            </div>
<script src="bootstrap/bootstrap.bundle.min.js"></script>
</body>
</html>