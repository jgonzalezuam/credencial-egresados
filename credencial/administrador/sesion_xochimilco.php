<?php 

if (
isset  ($_POST['email'])      &&  
!empty ($_POST['email'])      &&
isset  ($_POST['unidad'])   &&  
!empty ($_POST['unidad'])   ){

  $servidor ='localhost';
  $usuario  = 'root';
  $password = '';
  $bd = 'credencial_egresado';
  $mysqli = new mysqli($servidor,  $usuario, $password, $bd);
  $mysqli->set_charset("utf8");


  $emailXoc             = mysqli_real_escape_string($mysqli, mb_strtolower(trim($_POST['email'],'UTF-8')));
  $unidadXoc             = mysqli_real_escape_string($mysqli, mb_strtolower(trim($_POST['unidad'],'UTF-8')));
  
$sql = "
select 
id,
email,
password,
sesion_activa,
unidad
from
admi_unidades
where admi_unidades.email    = '$emailXoc'
and   admi_unidades.unidad = '$unidadXoc'";


$resultado  = $mysqli->query($sql);
$contarFilas= $mysqli->affected_rows;


if($contarFilas <1 || $contarFilas > 1 ){  
  header("location: usuario_no_existe_xochimilco.php");
  exit();
}
elseif($contarFilas == 1){	



  while ($datos       = $resultado->fetch_array()){
    $id               = $datos['id'];
    $email            = $datos['email'];      
    $unidad            = $datos['unidad'];    
    $sesion_activa    = $datos['sesion_activa'];  

    if ($sesion_activa === '0') {
      $sql = "update admi_unidades
      set  admi_unidades.sesion_activa = '1'
      where admi_unidades.id = '".$id."'";


      $resultado  = $mysqli->query($sql);
      $mysqli->close(); 
      

      }//end while
      session_start(); 
      $_SESSION['nombreXoc']   =  $nombreCompleto;
      $_SESSION['emailXoc']           =  $email;
      $_SESSION['unidadXoc']           =  $unidad;
      $_SESSION['idXoc']              =  $id;
      header("location: muestra_xochimilco.php");
    }

    if ($sesion_activa === '1') {
     
      header("location: sesion_activa_xoc.php");
    }
   
   
   
}



}


//<?php 
//session_start();
// Guardar datos de sesión
//$_SESSION["email"] = "azcapotzalco@correo.uam.mx";

//echo "Sesión iniciada y establecido nombre de usuario!" . "<br>";


//$unidad = $_POST['unidad'];	
//$email = $_POST['email'];	

//if ($unidad == 'Azcapotzalco'and $email == 'azcapotzalco@correo.uam.mx') {
   // echo "Eres miembro de la unidad Azcapotzalco" . '<br />' ;
    //header("Location:muestra_azcapotzalco.php");
//} else if ($unidad == 'Cuajimalpa' and $email == 'cuajimalpa@correo.uam.mx') {
   // echo "Eres miembro de la unidad Cuajimalpa" . '<br />';
   // header("Location:muestra_cuajimalpa.php");
//}else if ($unidad == 'Iztapalapa' and $email == 'iztapalapa@correo.uam.mx') {
    //echo "Eres miembro de la unidad Iztapalapa" . '<br />';
    //header("Location:muestra_iztapalapa.php");
//}else if ($unidad == 'Lerma' and $email == 'lerma@correo.uam.mx') {
   // echo "Eres miembro de la unidad Lerma" . '<br />';
   // header("Location:muestra_lerma.php");
//}else if($unidad == 'Xochimilco' and $email == 'xochimilco@correo.uam.mx') {
   // echo "Eres miembro de la unidad Xochimilco" . '<br />';
   // header("Location:muestra_xochimilco.php");
//}else {
    //echo "No eres miembro de ninguna unidad " . '<br />';
    //header("Location:usuario_no_existe_unidad.php");
//}

?>