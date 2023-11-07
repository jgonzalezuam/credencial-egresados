<?php 

$email = $_POST["email"];
$password = $_POST["password"];


$sql = "
select 
id,
email,
password
sesion_activa
from
administrador
where administrador.email    = '$emailUsuario'
and   administrador.password = '$passwordPassword'";

$stmt = $db->prepare($sql);
$stmt->execute();
$resultado  = $mysqli->query($sql);
$contarFilas= $mysqli->affected_rows;



   
     
header("location: sesion_activa1.php");
    

?>