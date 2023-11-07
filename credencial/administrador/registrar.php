<?php 


if (
isset  ($_POST['apellidoPaterno']) && 
!empty ($_POST['apellidoPaterno']) &&
isset  ($_POST['apellidoMaterno']) && 
!empty ($_POST['apellidoMaterno']) &&
isset  ($_POST['nombre'])          && 
!empty ($_POST['nombre'])          &&
isset  ($_POST['email'])           &&  
!empty ($_POST['email'])           &&
isset  ($_POST['password'])      &&  
!empty ($_POST['password'])        ){

  $servidor ='localhost';
  $usuario  = 'root';
  $password = '';
  $bd = 'cursos2021';
  $mysqli = new mysqli($servidor,  $usuario, $password, $bd);
  $mysqli->set_charset("utf8");


//Convertimos a mayuscula con strtoupper y minuscula con mb_strtolower
//Quitamos espacios el inicio y al final con trim
//mysqli_real_escape_string nos permite espacapar caracteres especiales


$apellidoPaterno = mysqli_real_escape_string($mysqli, mb_strtoupper(trim(($_POST['apellidoPaterno'])),'UTF-8'));

$apellidoMaterno = mysqli_real_escape_string($mysqli, mb_strtoupper(trim(($_POST['apellidoMaterno'])),'UTF-8'));

$nombre           = mysqli_real_escape_string($mysqli, mb_strtoupper(trim(($_POST['nombre'])),'UTF-8'));

$email            = mysqli_real_escape_string($mysqli, mb_strtolower(trim($_POST['email'],'UTF-8')));

$password        = mysqli_real_escape_string($mysqli, hash('sha512', $_POST['password']));


$sql = "insert into usuarios (
apellido_paterno, 
apellido_materno, 
nombre, email, 
password,
sesion_activa) 
values (
'$apellidoPaterno',
'$apellidoMaterno',
'$nombre',
'$email',
'$password',
 '0')";


  $mysqli->query($sql) ?   $confirmarInsert=( header("location: ../registro_exitoso.php")) : $confirmarInsert=( header("location: ../registro_fallido.php"));
  //cerramos la conexion
  $mysqli ->close();

}
?>