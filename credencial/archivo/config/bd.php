<?php 
function conexion(){
    $con=mysqli_connect('localhost','root','','credencial_egresado');
    return $con;
}

function listar($conexion){
    $sql="SELECT * FROM archivos";
    $query=mysqli_query($conexion,$sql);
    return $query;
}

function listar_uno($conexion){
    $sql="SELECT * FROM archivos";
    $query=mysqli_query($conexion,$sql);
    return $query;
}

function insertar($conexion,$categoria,$nombre,$matricula,$rfc,$unidad,$archivoBLOB,$tipo,$proceso){
    $sql="INSERT INTO archivos(categoria,nombre,matricula,rfc,unidad,archivo,tipo,proceso) VALUES('$categoria','$nombre','$matricula','$rfc','$unidad','$archivoBLOB','$tipo','$proceso')";
    $query=mysqli_query($conexion,$sql);
    return $query;
}


function eliminar($conexion,$id){
    $sql="DELETE from archivos WHERE id=$id";
    $query=mysqli_query($conexion,$sql);
    return $query;
}
function datos($conexion,$id){
    $sql="SELECT * FROM archivos WHERE id=$id";
    $query=mysqli_query($conexion,$sql);
    $datos=mysqli_fetch_assoc($query);
    return $datos;
}


function editar($conexion,$id,$categoria,$nombre,$matricula,$rfc,$unidad,$archivoBLOB,$tipo,$proceso){
    $sql="UPDATE archivos SET categoria='$categoria',nombre='$nombre',matricula='$matricula',rfc='$rfc',unidad='$unidad',archivo='$archivoBLOB',tipo='$tipo',proceso='$proceso' WHERE id=$id";
    $query=mysqli_query($conexion,$sql);
    return $query;
}

?>