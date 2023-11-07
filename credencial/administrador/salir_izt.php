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
    where admi_unidades.id = '".$_SESSION['idIzt']." '";

    $resultado  = $mysqli->query($sql);


unset($_SESSION['nombreIzt']); 
unset($_SESSION['nombreIzt']);
unset($_SESSION['emailIzt']);
unset($_SESSION['unidadIzt']);
session_destroy();
header('location: admin_iztapalapa.php');
?>