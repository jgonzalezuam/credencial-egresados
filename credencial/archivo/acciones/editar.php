<?php
#capturar los datos
$id=$_POST['id'];


include '../config/bd.php';
$conexion=conexion();
$datos=datos($conexion,$id);
$matriculaA=$datos['matricula'];
$nombreA=$datos['nombre']; 
$rfcA=$datos['rfc'];
$unidadA=$datos['unidad'];
$procesoA=$datos['proceso'];

    if(($archivo['size']==0 && $nombre=='') || ($archivo['size']==0 && $matricula==$matriculaA) || ($archivo['size']==0 && $nombre!=$nombreA) || ($archivo['size']==0 && $rfc!=$rfcA) || ($archivo['size']==0 && $unidad!=$unidadA)  || ($archivo['size']==0 && $proceso==$procesoA)){ #no modifico el archivo
        header("location:../editar.php?id=$id");
    }

    #categoria y tipo
    $tipo=$archivo['type'];
    $categoria=explode('.',$archivo['name'])[1];

    #fecha
    $fecha=date('Y-m-d H:i:s');

    $tmp_name=$archivo['tmp_name'];
    $contenido_archivo=file_get_contents($tmp_name);
    $archivoBLOB=addslashes($contenido_archivo);

    
    if(($archivo['size']==0 && $nombre=='') || ($archivo['size']==0 && $matricula==$matriculaA) || ($archivo['size']==0 && $nombre!=$nombreA) || ($archivo['size']==0 && $rfc!=$rfcA) || ($archivo['size']==0 && $unidad!=$unidadA)  || ($archivo['size']==0 && $proceso==$procesoA)) {
        #modificar todo
        $query=editar($conexion,$id,$categoria,$tipo,$matricula,$nombre,$rfc,$unidad,$proceso,$archivoBLOB);
        header("location:../editar.php?id=$id&&editar=success");
    }




