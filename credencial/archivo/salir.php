<?php
session_start();

$servidor ='localhost';
$usuario  = 'root';
$password = '';
$bd = 'credencial_egresado';
$mysqli = new mysqli($servidor,  $usuario, $password, $bd);
$mysqli->set_charset("utf8");



    $sql = "update administrador
    set  administrador.sesion_activa = '0'
    where administrador.id = '".$_SESSION['id']." '";

    $resultado  = $mysqli->query($sql);


unset($_SESSION['nombreAdmin']); 
unset($_SESSION['nombreAdmin']);
unset($_SESSION['email']);
session_destroy();
header('location: ../administrador/admin.php');
?>