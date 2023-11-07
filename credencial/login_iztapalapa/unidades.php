<?php session_start();

// Comprobamos tenga sesion, si no entonces redirigimos y MATAMOS LA EJECUCION DE LA PAGINA.
if (isset($_SESSION['usuario'])) {
} else {
	header('Location: login.php');
	die();
}

?>

<?php

$diseno = $_POST["usuario"];	

if ($diseno == 'azcapotzalco') {
    echo "Eres de la Unidad Azcapotzalco" . '<br />' ;
    header("Location:muestra_azcapotzalco.php");
} else if ($diseno == 'cuajimalpa') {
    echo "Eres de la Unidad Cuajimalpa" . '<br />';
    header("Location:muestra_cuajimalpa.php");
}else if($diseno == '3') {
    echo "Tienes tres niveles de egreso" . '<br />';
    header("Location:di_credencial/buscar_credencial_tres.php");
}else {
    echo "No eres tienes ningun nivel de egreso " . '<br />';
}

?>