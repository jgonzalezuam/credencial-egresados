<?php

    include "../conexion_1.php";

    $id = $_POST["id"];
    $matricula = $_POST["matricula"];
    $nombre = $_POST["nombre"];
    $rfc = $_POST["rfc"];
    $fec_nac = $_POST["fec_nac"];
    $valida = $_POST["valida"];


    $sentencia = $db->prepare("UPDATE egresados_multimedia SET id = ?, matricula = ?, nombre = ?, rfc = ?, fec_nac = ?, valida = ? WHERE id = ?");

    $resultado = $sentencia->execute([$matricula, $nombre , $rfc, $fec_nac, $valida, $id]);

    if ($resultado === TRUE) {
       header("Location: muestra.php");
    }else {
        echo "Algo salio mal!";
    }

