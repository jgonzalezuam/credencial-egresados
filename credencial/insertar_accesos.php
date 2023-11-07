<?php 
//session_start(); 

//if (!isset ($_SESSION['email'])){ 
   // header("location: ini_ses/iniciar_sesion.php"); 
    //exit(); 
//} 

?> 

<?php
include("conexion_1.php");

print_r($db);
var_dump($db);

print_r("Archivo insertar");

$matricula = $_POST["matricula"];
$apellido_paterno = $_POST["apellido_paterno"];
$apellido_materno = $_POST["apellido_materno"];
$nombre = $_POST["nombre"];
$fec_nac = $_POST["fec_nac"];
$unidad = $_POST["unidad"];
$division = $_POST["division"];
$carrera = $_POST["carrera"];
$email = $_POST["email"];
$contrasena = $_POST[" "];
$sesion_activa = $_POST[""];




$insertar="INSERT INTO acceso(matricula, apellido_paterno, apellido_materno, nombre, fec_nac, unidad, division, carrera, email, contrasena, sesion_activa) VALUES ('$matricula', '$apellido_paterno', '$apellido_materno', '$nombre', '$fec_nac', '$unidad', '$division', '$carrera', '$email', 'Cr3d3nc1AL', '0')";

//$resultado = mysqli_query($conexion, $insertar);
$stmt = $db->prepare($insertar);
$stmt->execute();

print_r($stmt);
var_dump($stmt);

header("Location:acceso_exitoso.php");




?> 