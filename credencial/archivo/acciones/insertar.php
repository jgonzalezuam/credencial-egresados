<?php 
#capturar los datos
    $matricula=$_POST['matricula'];
    $nombre=$_POST['nombre'];    
    $rfc=$_POST['rfc'];
    $unidad=$_POST['unidad'];
    $proceso=$_POST['proceso'];
    $archivo=$_FILES['archivo'];
    var_dump($archivo);
#categoria y tipo
$tipo=$archivo['type'];
$categoria=explode('.',$archivo['name'])[1];

#fecha
$fecha=date('Y-m-d H:i:s');

$tmp_name=$archivo['tmp_name'];
$contenido_archivo=file_get_contents($tmp_name);
$archivoBLOB=addslashes($contenido_archivo);

include '../config/bd.php';
$conexion=conexion();
$query=insertar($conexion,$categoria,$nombre,$matricula,$rfc,$unidad,$archivoBLOB,$tipo,$proceso);
if($query){
    header('location:../index.php?insertar=success');
    header('location: ../registro_exitoso.php');
}else{
    header('location:../index.php?insertar=error');
}


?>