<?php
//$conexion =  mysqli_connect("localhost", "egresado", "Egr3$ad0*", "egresados");
//mysqli_set_charset($conexion,"utf8");
//if ($conexion) {
//   echo "Conexion Exitosa";
//   print_r("Conexion exitosa");
//}else {
//    echo "Error en conexion";
//    print_r("Conexion fallida");
//}


$database = "egresados";


try {
  $db = new PDO("mysql:host=localhost;dbname=$database",'root', 'K22t7Tod2023@');
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    print_r("Conexion exitosa");
 
  
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

?>