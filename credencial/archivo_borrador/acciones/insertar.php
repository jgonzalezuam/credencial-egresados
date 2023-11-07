<?php 
#capturar los datos
    $matricula=$_POST['matricula'];
    $nombre=$_POST['nombre'];
    $rfc=$_POST['rfc'];
    $unidad=$_POST['unidad'];
    $archivo_uno=$_FILES['archivo_uno'];
    $archivo_dos=$_FILES['archivo_dos'];
    $proceso=$_POST['proceso'];
    
    var_dump($archivo_uno);
    var_dump($archivo_dos);
   
#categoria y tipo
$tipo=$archivo_uno['type'];
$categoria=explode('.',$archivo_uno['name'])[1];
$tipo=$archivo_dos['type'];
$categoria=explode('.',$archivo_dos['name'])[1];

#fecha
$fecha=date('Y-m-d H:i:s');

$tmp_name=$archivo_uno['tmp_name'];
$tmp_name=$archivo_dos['tmp_name'];
$contenido_archivo=file_get_contents($tmp_name);
$archivoBLOB=addslashes($contenido_archivo);

include '../config/bd.php';
$conexion=conexion();
$query=insertar_uno($conexion,$matricula,$nombre,$rfc,$unidad,$archivo_uno,$archivo_dos,$proceso,$categoria,$tipo);
if($query){
    header('location:../index.php?insertar=success');
    header('location: ../documento_exitoso.php');
}else{
    header('location:../index.php?insertar=error');
}


