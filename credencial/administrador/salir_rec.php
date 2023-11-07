<?php
session_start();

$servidor ='localhost';
$usuario  = 'root';
$password = '';
$bd = 'credencial_egresado';
$mysqli = new mysqli($servidor,  $usuario, $password, $bd);
$mysqli->set_charset("utf8");



    $sql = "update admi_unidades
    set  admi_unidades.sesion_activa = '0'
    where admi_unidades.id = '".$_SESSION['idRec']." '";

    $resultado  = $mysqli->query($sql);


unset($_SESSION['nombreRec']); 
unset($_SESSION['nombreRec']);
unset($_SESSION['emailRec']);
unset($_SESSION['unidadRec']);
session_destroy();
header('location: admin_rectoria.php');
?>