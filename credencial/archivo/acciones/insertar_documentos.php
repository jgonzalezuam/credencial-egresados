<?php 
#capturar los datos
    
    $archivo_uno=$_FILES['archivo_uno'];
    $archivo_dos=$_FILES['archivo_dos'];
    $archivo_tres=$_FILES['archivo_tres'];
    $archivo_cuatro=$_FILES['archivo_cuatro'];
    $archivo_cinco=$_FILES['archivo_cinco'];
    $archivo_seis=$_FILES['archivo_seis'];
    
    var_dump($archivo_uno);
    var_dump($archivo_dos);
    var_dump($archivo_tres);
    var_dump($archivo_cuatro);
    var_dump($archivo_cinco);
    var_dump($archivo_seis);
#categoria y tipo
$tipo=$archivo_uno['type'];
$categoria=explode('.',$archivo_uno['name'])[1];
$tipo=$archivo_dos['type'];
$categoria=explode('.',$archivo_dos['name'])[1];
$tipo=$archivo_tres['type'];
$categoria=explode('.',$archivo_tres['name'])[1];

#fecha
$fecha=date('Y-m-d H:i:s');

$tmp_name=$archivo_uno['tmp_name'];
$tmp_name=$archivo_dos['tmp_name'];
$tmp_name=$archivo_tres['tmp_name'];
$tmp_name=$archivo_cuatro['tmp_name'];
$tmp_name=$archivo_cinco['tmp_name'];
$tmp_name=$archivo_seis['tmp_name'];
$contenido_archivo=file_get_contents($tmp_name);
$archivoBLOB=addslashes($contenido_archivo);

include '../config/bd.php';
$conexion=conexion();
$query=insertar_uno($conexion,$archivo_uno,$archivo_dos,$archivo_tres,$archivo_cuatro,$archivo_cinco,$archivo_seis,$clave_aprobacion);
if($query){
    header('location:../index.php?insertar=success');
    header('location: ../documento_exitoso.php');
}else{
    header('location:../index.php?insertar=error');
}


