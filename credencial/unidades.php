<?php session_start();

// Comprobamos tenga sesion, si no entonces redirigimos y MATAMOS LA EJECUCION DE LA PAGINA.
if (isset($_SESSION['usuario'])) {
} else {
	header('Location: login.php');
	die();
}
$unidad = $_POST["unidad"];	

if ($unidad == 'Azcapotzalco') {
    echo "Eres miembro de la unidad Azcapotzalco" . '<br />' ;
    header("Location:ticket/azcapotzalco.php");
} else if ($unidad == 'Cuajimalpa') {
    echo "Eres miembro de la unidad Cuajimalpa" . '<br />';
    header("Location:ticket/cuajimalpa.php");
}else if ($unidad == 'Iztapalapa') {
    echo "Eres miembro de la unidad Iztapalapa" . '<br />';
    header("Location:ticket/iztapalapa.php");
}else if ($unidad == 'Lerma') {
    echo "Eres miembro de la unidad Lerma" . '<br />';
    header("Location:ticket/lerma.php");
}else if($unidad == 'Xochimilco') {
    echo "Eres miembro de la unidad Xochimilco" . '<br />';
    header("Location:ticket/xochimilco.php");
}else {
    echo "No eres miembro de ninguna unidad " . '<br />';
}





?>