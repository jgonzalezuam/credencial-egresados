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

function insertar_uno($conexion,$matricula,$nombre,$rfc,$unidad,$archivoBLOB,$proceso,$categoria,$tipo){
    $sql="INSERT INTO archivos(matricula,nombre,rfc,unidad,archivo,proceso,categoria,tipo) VALUES('$matricula','$nombre','$rfc','$unidad','$archivoBLOB','REVISION','$categoria','$tipo')";
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
function editarNombre($conexion,$id,$nombre){
    $sql="UPDATE documentos SET nombre='$nombre' WHERE id=$id";
    $query=mysqli_query($conexion,$sql);
    return $query;
}

function editarProceso($conexion,$id,$nombre,$proceso){
    $sql="UPDATE archivo SET proceso='$proceso' WHERE id=$id";
    $query=mysqli_query($conexion,$sql);
    return $query;
}

function editarArchivo($conexion,$id,$categoria,$tipo,$fecha,$proceso,$archivoBLOB){
    $sql="UPDATE archivo SET categoria='$categoria',tipo='$tipo',fecha='$fecha',proceso='$proceso',archivo='$archivoBLOB' WHERE id=$id";
    $query=mysqli_query($conexion,$sql);
    return $query;
}

function editarInicio($conexion,$id,$categoria,$tipo,$fecha,$proceso,$inicio,$termino,$clave,$archivoBLOB){
    $sql="UPDATE archivo SET categoria='$categoria',tipo='$tipo',fecha='$fecha',proceso='$proceso',inicio='$inicio',termino='$termino',termino='$termino',clave='$clave',archivo='$archivoBLOB' WHERE id=$id";
    $query=mysqli_query($conexion,$sql);
    return $query;
}

function editarClave($conexion,$id,$clave){
    $sql="UPDATE archivo SET clave='$clave' WHERE id=$id";
    $query=mysqli_query($conexion,$sql);
    return $query;
}

function editarEmpresa($conexion,$id,$empresa){
    $sql="UPDATE archivo SET empresa='$empresa' WHERE id=$id";
    $query=mysqli_query($conexion,$sql);
    return $query;
}

function editar($conexion,$id,$nombre,$categoria,$tipo,$fecha,$proceso,$inicio,$termino,$clave,$empresa,$archivoBLOB){
    $sql="UPDATE archivo SET nombre='$nombre', categoria='$categoria',tipo='$tipo',fecha='$fecha',proceso='$proceso',inicio='$inicio',termino='$termino',clave='$clave',empresa='$empresa',archivo='$archivoBLOB' WHERE id=$id";
    $query=mysqli_query($conexion,$sql);
    return $query;
}

?>