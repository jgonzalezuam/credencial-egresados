<?php 
//session_start(); 

//if (!isset ($_SESSION['email'])){ 
  //  header("location: ../iniciar_sesion.php"); 
    //exit(); 
//} 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comprobantes capturados</title>
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <link rel="icon" type="imagen/x-icon" href="../img/variacion1.jpg">
</head>
<body>
    <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container"  >
        <a class="navbar-brand js-scroll-trigger" ><img src="../img/variacion6.png" alt=""></a>
        <a class="navbar-brand js-scroll-trigger" ><img src="../img/egresados.png" style="height:70px;" alt=""></a>
            <!--<a class="navbar-brand js-scroll-trigger" ><img src="../img/Logo_Vinculación.png" alt="" ></a>-->
            <!--<right><a href="../excel.php" class="navbar-brand js-scroll-trigger" ><button class="btn btn-dark"   type="submit">Generar excel</button></a>-->
            <a href="../salir_uno.php" class="navbar-brand js-scroll-trigger" ><button class="btn btn-dark"   type="submit">Salir</button></a></right>
           
        </div>
    </nav>
      <br><br>
        <table class="table table-sm table-striped text-center ">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Matrícula</th>
                    <th>Nombre</th>
                    <th>RFC</th>
                    <th>Unidad</th>
                    <th>Tipo de Archivo</th>
                    <th>Comprobante de Pago</th>
                    <th>Identificación Oficial</th>
                    <th>Proceso</th>
                    <th>Acciones</th>
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
                        $matricula=$datos['matricula'];
                        $nombre=$datos['nombre'];
                        $rfc=$datos['rfc'];                        
                        $unidad=$datos['unidad'];
                        $categoria=$datos['categoria'];
                        $archivo_uno=$datos['archivo_uno'];
                        $tipo=$datos['tipo'];
                        $proceso=$datos['proceso'];
                        

                    $valor="";
                    if($categoria=='jpg' || $categoria=='png'){
                        $valor="<img width='50' src='data:image/jpg;base64,".base64_encode($archivo_uno)."'>";
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
                    <td><?php echo $matricula ;?></td>
                    <td><?php echo $nombre ;?></td>
                    <td><?php echo $rfc ;?></td>
                    <td><?php echo $unidad ;?></td>
                    <td><?php echo $categoria;?></td>
                    <td><a href="cargar.php?id=<?php echo $id; ?>" target="_blank"><?php echo $valor ;?> </a></td>
                   
                    <td><?php echo $proceso;?></td>
                    <td><a class='btn btn-secondary' href="editar.php?id=<?php echo $id?>">Editar</a> <a class='btn btn-danger' href="acciones/eliminar.php?id=<?php echo $id?>">Eliminar</a></td>
                    
                </tr>
                <?php 
                    }
                ?>
            </tbody>
        </table>


    </div>
    

<script src="bootstrap/bootstrap.bundle.min.js"></script>
</body>
</html>