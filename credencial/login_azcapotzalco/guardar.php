
<?php

#Si todo va bien, se ejecuta esta parte del código...

include("../conexion_1.php");
$id = $_POST["id"];
$matricula = $_POST["matricula"];
$nombre = $_POST["nombre"];
$rfc = $_POST["rfc"];
$unidad = $_POST["unidad"];
$fec_emision = $_POST["fec_emision"];
$valida = $_POST["valida"];

$sentencia = $db->prepare("UPDATE egresados_multimedia SET matricula = ?, nombre = ?, rfc = ?, unidad = ?, fec_emision = ?, valida = ? WHERE id = ?;");
$resultado = $sentencia->execute([$matricula, $nombre, $rfc, $unidad, $fec_emision, $valida, $id]); # Pasar en el mismo orden de los ?
if($resultado === TRUE) {
echo "Cambios guardados"; 
header("Location: muestra_prueba.php");

}else echo "Algo salió mal. Por favor verifica que la tabla exista, así como el ID del usuario";
?>