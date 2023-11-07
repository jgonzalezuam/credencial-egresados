<?php 


if (
isset  ($_POST['email'])           &&  
!empty ($_POST['email'])           &&
isset  ($_POST['password'])      &&  
!empty ($_POST['password'])        ){

  $servidor ='localhost';
  $usuario  = 'root';
  $password = '';
  $bd = 'cemefi';
  $mysqli = new mysqli($servidor,  $usuario, $password, $bd);
  $mysqli->set_charset("utf8");


//Convertimos a mayuscula con strtoupper y minuscula con mb_strtolower
//Quitamos espacios el inicio y al final con trim
//mysqli_real_escape_string nos permite espacapar caracteres especiales


$email            = mysqli_real_escape_string($mysqli, mb_strtolower(trim($_POST['email'],'UTF-8')));

$password        = mysqli_real_escape_string($mysqli, hash('sha512', $_POST['password']));


$sql = "insert into administrador (
 email, 
password,
sesion_activa) 
values (
'$email',
'$password',
 '0')";


  $mysqli->query($sql) ?   $confirmarInsert=( header("location: registro_exitoso_admi.php")) : $confirmarInsert=( header("location: ../registro_fallido.php"));
  //cerramos la conexion
  $mysqli ->close();

}
?>