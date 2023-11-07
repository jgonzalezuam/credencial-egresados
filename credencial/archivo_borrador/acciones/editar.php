<?php
#capturar los datos
    $id=$_POST['id'];
    $nombre=$_POST['nombre'];
    $proceso=$_POST['proceso'];
    $archivo=$_FILES['archivo'];
    $matricula=$_POST['matricula'];
    $rfc=$_POST['rfc'];
    $unidad=$_POST['unidad']; 

  
    include '../config/bd.php';
    $conexion=conexion();
    $datos=datos($conexion,$id);
    $nombreA=$datos['nombre'];
    $procesoA=$datos['proceso'];
    $inicioA=$datos['inicio'];
    $terminoA=$datos['termino'];
    $claveA=$datos['clave'];
    $empresaA=$datos['empresa'];

    if(($archivo['size']==0 && $nombre=='') || ($archivo['size']==0 && $nombre==$nombreA) || ($archivo['size']==0 && $proceso!=$procesoA) || ($archivo['size']==0 && $inicio!=$inicioA) || ($archivo['size']==0 && $termino!=$terminoA) || ($archivo['size']==0 && $clave!='') || ($archivo['size']==0 && $empresa==$empresaA)){ #no modifico el archivo
        header("location:../editar.php?id=$id");
    }

    if(($archivo['size']==0 && $nombre!='') || ($archivo['size']==0 && $nombre!=$nombreA)  || ($archivo['size']==0 && $proceso!=$procesoA) || ($archivo['size']==0 && $inicio!=$inicioA) || ($archivo['size']==0 && $termino!=$terminoA) || ($archivo['size']==0 && $clave!='') || ($archivo['size']==0 && $empresa==$empresaA)){
        #solo el nombre
        $query=editarNombre($conexion,$id,$nombre,$proceso,$inicio,$termino,$clave,$empresa);
        header("location:../editar.php?id=$id&&editar=success");
    }

    #categoria y tipo
    $tipo=$archivo['type'];
    $categoria=explode('.',$archivo['name'])[1];

    #fecha
    $fecha=date('Y-m-d H:i:s');

    $tmp_name=$archivo['tmp_name'];
    $contenido_archivo=file_get_contents($tmp_name);
    $archivoBLOB=addslashes($contenido_archivo);

    if(($archivo['size']>0 && $nombre=='') || ($archivo['size']>0 && $nombre==$nombreA) || ($archivo['size']==0 && $proceso!=$procesoA) || ($archivo['size']==0 && $inicio!=$inicioA) || ($archivo['size']==0 && $termino!=$terminoA) || ($archivo['size']>0 && $clave=='') || ($archivo['size']>0 && $clave==$claveA)|| ($archivo['size']>0 && $empresa==$empresaA)){
        #modificar solo archivo
        $query=editarArchivo($conexion,$id,$categoria,$tipo,$fecha,$proceso,$inicio,$termino,$clave,$empresa,$archivoBLOB);
        header("location:../editar.php?id=$id&&editar=success");

    }
    if(($archivo['size']>0 && $nombre!='') || ($archivo['size']>0 && $nombre!=$nombreA) || ($archivo['size']==0 && $proceso!=$procesoA) || ($archivo['size']==0 && $inicio!=$inicioA) || ($archivo['size']==0 && $termino!=$terminoA) || ($archivo['size']>0 && $clave=='') || ($archivo['size']>0 && $clave==$claveA) || ($archivo['size']>0 && $empresa==$empresaA)) {
        #modificar todo
        $query=editar($conexion,$id,$nombre,$categoria,$tipo,$fecha,$proceso,$inicio,$termino,$clave,$empresa,$archivoBLOB);
        header("location:../editar.php?id=$id&&editar=success");
    }




