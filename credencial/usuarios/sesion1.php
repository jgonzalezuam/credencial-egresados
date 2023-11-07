<?php 

if (
isset  ($_POST['email'])      &&  
!empty ($_POST['email'])      &&
isset  ($_POST['password'])   &&  
!empty ($_POST['password'])   ){

  $servidor ='localhost';
  $usuario  = 'root';
  $password = '';
  $bd = 'uam';
  $mysqli = new mysqli($servidor,  $usuario, $password, $bd);
  $mysqli->set_charset("utf8");


  $emailUsuario             = mysqli_real_escape_string($mysqli, mb_strtolower(trim($_POST['email'],'UTF-8')));

  $passwordPassword         = mysqli_real_escape_string($mysqli, hash('sha512', $_POST['password']));

$sql = "
select 
id,
email,
sesion_activa
from
administrador
where administrador.email    = '$emailUsuario'
and   administrador.password = '$passwordPassword'";


$resultado  = $mysqli->query($sql);
$contarFilas= $mysqli->affected_rows;


if($contarFilas <1 || $contarFilas > 1 ){  
  header("location: usuario_no_existe.php");
  exit();
}
elseif($contarFilas == 1){	



  while ($datos       = $resultado->fetch_array()){
    $id               = $datos['id'];
    $email            = $datos['email'];     
    $sesion_activa    = $datos['sesion_activa'];  

    if ($sesion_activa === '0') {
      $sql = "update administrador
      set  administrador.sesion_activa = '1'
      where administrador.id = '".$id."'";


      $resultado  = $mysqli->query($sql);
      $mysqli->close(); 
      

      }//end while
      session_start(); 
      $_SESSION['nombreAdmin']   =  $nombreCompleto;
      $_SESSION['email']           =  $email;
      $_SESSION['id']              =  $id;
      header("location: ../buscador_webservice.php");
    }

    if ($sesion_activa === '1') {
     
      header("location: sesion_activa1.php");
    }
   
   
   
}



}
?>