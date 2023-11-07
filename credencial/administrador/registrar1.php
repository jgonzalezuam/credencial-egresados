<?php 


  $database = "egresados";
try {
  $db = new PDO("mysql:host=localhost;dbname=$database",'root', 'K22t7Tod2023@');
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    print_r("Conexion exitosa");
 
  
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}


$email = $_POST["email"];
$password = $_POST["password"];

//Convertimos a mayuscula con strtoupper y minuscula con mb_strtolower
//Quitamos espacios el inicio y al final con trim
//mysqli_real_escape_string nos permite espacapar caracteres especiales



$sql = "insert into administrador (
 email, 
password,
sesion_activa) 
values (
'$email',
'$password',
 '0')";

 
 $stmt = $db->prepare($sql);
 $stmt->execute();

 // $mysqli->query($sql) ?   $confirmarInsert=( header("location: registro_exitoso_admi.php")) : $confirmarInsert=( header("location: ../registro_fallido.php"));
  //cerramos la conexion
 // $mysqli ->close();

  header("Location:registro_exitoso_admi.php");

?>