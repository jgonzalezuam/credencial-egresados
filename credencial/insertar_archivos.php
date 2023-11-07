<?php session_start();

// Comprobamos tenga sesion, si no entonces redirigimos y MATAMOS LA EJECUCION DE LA PAGINA.
if (isset($_SESSION['usuario'])) {
} else {
	header('Location: login.php');
	die();
}

?>

<?php
include("conexion_1.php");

$matricula = $_POST["matricula"];
$rfc = $_POST["rfc"];
$nombre = $_POST["nombre"];
$apellido_paterno = $_POST["apellido_paterno"];
$apellido_materno = $_POST["apellido_materno"];
$unidad = $_POST["unidad"];
$nivel = $_POST["nivel"];
$estado = $_POST["estado"];
$gra = $_POST["gra"];
$codigo = addslashes(file_get_contents($_FILES['codigo']['tmp_name']));
$foto = addslashes(file_get_contents($_FILES['foto']['tmp_name']));
$firma = addslashes(file_get_contents($_FILES['firma']['tmp_name']));
//$qr = addslashes(file_get_contents($_FILES['qr']['tmp_name']));
$fec_emision = $_POST["fec_emision"];
$vigencia = $_POST[" "];
$valida = $_POST[" "];
//$foto = addslashes(file_get_contents($_FILES['foto']['tmp_name']));
//$firma = addslashes(file_get_contents($_FILES['firma']['tmp_name']));
//$codigo = addslashes(file_get_contents($_FILES['codigo']['tmp_name']));


$insertar="INSERT INTO egresados_digital(matricula, rfc, nombre, apellido_paterno, apellido_materno, unidad, nivel, estado, gra, codigo, foto, firma, fec_emision, vigencia, valida) VALUES ('$matricula', '$rfc', '$nombre', '$apellido_paterno', '$apellido_materno', '$unidad', '$nivel', '$estado', '$gra', '$codigo','$foto', '$firma', '$fec_emision', 'VIGENCIA','EN TRAMITE')";

//$resultado = mysqli_query($conexion, $insertar);

$stmt = $db->prepare($insertar);
$stmt->execute();



if ($unidad == 'AZCAPOTZALCO') {
    echo "Eres miembro de la unidad Azcapotzalco" . '<br />' ;
    header("Location:ticket/azcapotzalco.php");
} else if ($unidad == 'CUAJIMALPA') {
    echo "Eres miembro de la unidad Cuajimalpa" . '<br />';
    header("Location:ticket/cuajimalpa.php");
}else if ($unidad == 'IZTAPALAPA') {
    echo "Eres miembro de la unidad Iztapalapa" . '<br />';
    header("Location:ticket/iztapalapa.php");
}else if ($unidad == 'LERMA') {
    echo "Eres miembro de la unidad Lerma" . '<br />';
    header("Location:ticket/lerma.php");
}else if($unidad == 'XOCHIMILCO') {
    echo "Eres miembro de la unidad Xochimilco" . '<br />';
    header("Location:ticket/xochimilco.php");
}else {
    echo "No eres miembro de ninguna unidad " . '<br />';
}


 //header("Location:inscripcion_exitosa.php");

 
?> 