<?php 
$id=$_GET['id'];
include '../config/bd.php';
$conexion=conexion();
$query=eliminar($conexion,$id);
if($query){
 header('location:../muestra_archivos.php?eliminar=success');
}else{
    header('location:../muestra_archivos.php?eliminar=error');
}
?>