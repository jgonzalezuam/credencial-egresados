<?php 


if (
isset  ($_POST['nombre']) && 
!empty ($_POST['nombre']) &&
isset  ($_POST['email']) && 
!empty ($_POST['email']) &&
isset  ($_POST['horario'])          && 
!empty ($_POST['horario'])          &&
isset  ($_POST['participacion'])           &&  
!empty ($_POST['participacion'])){

  $servidor ='localhost';
  $usuario  = 'root';
  $password = '';
  $bd = 'cemefi';
  $mysqli = new mysqli($servidor,  $usuario, $password, $bd);
  $mysqli->set_charset("utf8");


//Convertimos a mayuscula con strtoupper y minuscula con mb_strtolower
//Quitamos espacios el inicio y al final con trim
//mysqli_real_escape_string nos permite espacapar caracteres especiales


$nombre = mysqli_real_escape_string($mysqli, mb_strtoupper(trim(($_POST['nombre'])),'UTF-8'));

$email = mysqli_real_escape_string($mysqli, mb_strtolower(trim(($_POST['email'])),'UTF-8'));

$horario           = mysqli_real_escape_string($mysqli, mb_strtoupper(trim(($_POST['horario'])),'UTF-8'));

$participacion            = mysqli_real_escape_string($mysqli, mb_strtoupper(trim($_POST['participacion'],'UTF-8')));




$sql = "insert into usuarios (
nombre, email, 
password,
horario, participacion,
sesion_activa) 
values (
'$nombre',
'$email',
'C3m3f1_2023',
'$horario',
'$participacion',
 '0')";


  $mysqli->query($sql) ?   $confirmarInsert=( header("location: registro_exitoso.php")) : $confirmarInsert=( header("location: registro_fallido.php"));
  //cerramos la conexion
  $mysqli ->close();

}
?>