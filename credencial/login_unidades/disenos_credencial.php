<?php

$diseno = $_POST["diseno"];	

if ($diseno == '1') {
    echo "Tienes un nivel de egreso" . '<br />' ;
    header("Location:di_credencial/buscar_credencial.php");
} else if ($diseno == '2') {
    echo "Tienes dos niveles de egreso" . '<br />';
    header("Location:di_credencial/buscar_credencial_dos.php");
}else if($diseno == '3') {
    echo "Tienes tres niveles de egreso" . '<br />';
    header("Location:di_credencial/buscar_credencial_tres.php");
}else {
    echo "No eres tienes ningun nivel de egreso " . '<br />';
}

?>