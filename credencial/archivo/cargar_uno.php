
<?php 
    $id=$_GET['id'];
    include "config/bd.php";
    $conexion=conexion();
    $datos=datos_uno($conexion,$id);

    $tipo=$datos['tipo'];
    $categoria=$datos['categoria'];
   
    $archivo_uno=$datos['archivo_uno'];
    $valor_tipo="Content-type:$tipo";
    header("Content-type:$tipo");
    header("Content-Disposition:inline;filename=$nombre.$categoria");
    echo $archivo_uno;
?>