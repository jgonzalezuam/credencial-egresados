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
$unidad = $_POST["unidad"];

//Convertimos a mayuscula con strtoupper y minuscula con mb_strtolower
//Quitamos espacios el inicio y al final con trim
//mysqli_real_escape_string nos permite espacapar caracteres especiales



$sql = "insert into admi_unidades (
 email, 
password,
sesion_activa,
unidad) 
values (
'$email',
'$password',
 '0',
 '$unidad')";


 $stmt = $db->prepare($sql);
 $stmt->execute();


 //$mysqli->query($sql) ?   $confirmarInsert=( header("location: registro_admin_unidades.php")) : $confirmarInsert=( header("location: ../registro_fallido.php"));
  //cerramos la conexion
//  $mysqli ->close();
header("Location:registro_exitoso_admi.php");

?>