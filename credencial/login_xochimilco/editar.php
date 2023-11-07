<?php
if(!isset($_GET["id"])) exit();
$id = $_GET["id"];
include("../conexion_1.php");
$sentencia = $db->prepare("SELECT * FROM egresados_multimedia WHERE id = ?;");
$sentencia->execute([$id]);
$persona = $sentencia->fetch(PDO::FETCH_OBJ);
if($persona === FALSE){
	#No existe
	echo "¡No existe alguna persona con ese ID!";
	exit();
}

#Si la persona existe, se ejecuta esta parte del código
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Registrar persona</title>
</head>
<body>
	<form method="post" action="guardar.php">
		<!-- Ocultamos el ID para que el usuario no pueda cambiarlo (en teoría) -->
		<input type="hidden" name="id" value="<?php echo $persona->id; ?>">
        <label for="nombre">Matricula:</label>
		<br>
		<input value="<?php echo $persona->matricula ?>" name="matricula" required type="text" id="matricula" placeholder="Escribe tu nombre..." style="width : 150px;">
		<br><br>
		<label for="nombre">Nombre:</label>
		<br>
		<input value="<?php echo $persona->nombre ?>" name="nombre" required type="text" id="nombre" placeholder="Escribe tu nombre..." style="width : 350px;">
		<br><br>
        <label for="nombre">RFC:</label>
		<br>
		<input value="<?php echo $persona->rfc ?>" name="rfc" required type="text" id="rfc" placeholder="Escribe tu nombre..." style="width : 150px;">
		<br><br>
        <label for="nombre">Unidad:</label>
		<br>
		<input value="<?php echo $persona->unidad ?>" name="unidad" required type="text" id="unidad" placeholder="Escribe tu nombre..." style="width : 150px;">
		<br><br>
        <label for="nombre">Fecha de emisión:</label>
		<br>
		<input value="<?php echo $persona->fec_emision ?>" name="fec_emision" required type="date" id="fec_emision" placeholder="Escribe tu nombre..." style="width : 150px;">
		<br><br>
        <label for="nombre">Status:</label>
		<br>
		<input value="<?php echo $persona->valida ?>" name="valida" required type="text" id="valida" placeholder="Escribe tu nombre..." style="width : 150px;">
		<br><br>
		<br><br><input type="submit" value="Guardar cambios">
	</form>
</body>
</html>