<?php 
//session_start(); 

//if (!isset ($_SESSION['email'])){ 
   // header("location: ini_ses/iniciar_sesion.php"); 
    //exit(); 
//} 

?>

<?php
include("conexion.php");
 
$matricula = $_POST["matricula"];
$nombre = $_POST["nombre"];
$rfc = $_POST["rfc"];
$unidad = $_POST["unidad"];
$comprobante = addslashes(file_get_contents($_FILES['comprobante']['tmp_name']));
$identificacion = addslashes(file_get_contents($_FILES['identificacion']['tmp_name']));
//$foto = addslashes(file_get_contents($_FILES['foto']['tmp_name']));
//$firma = addslashes(file_get_contents($_FILES['firma']['tmp_name']));
//$codigo = addslashes(file_get_contents($_FILES['codigo']['tmp_name']));


$insertar="INSERT INTO comprobantes(matricula, nombre, rfc, unidad, comprobante, identificacion) VALUES ('$matricula', '$nombre', '$rfc', '$unidad', '$comprobante','$identificacion')";

$resultado = mysqli_query($conexion, $insertar);


 header("Location:inscripcion_exitosa.php");

?> 