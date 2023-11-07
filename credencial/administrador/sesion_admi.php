
<?php
$email = $_POST["email"];
$password = $_POST["password"];

    session_start();
    require('conexion_1');
    $email = $_POST['email'];
    $password = $_POST['password'];
    $conexion -> setAttribute(PDO::ATTR_ERRMODE_EXCEPTION);

    $query = $conexion->prepare("SELECT * FROM admi_usuarios WHERE email = :email AND password = :password");
    $query->bindParam(":email", $email);
    $query->bindParam(":password", $password);
    $query->excute();
    $usuario = $query->fetch(PDO::FETCH_ASSOC);
    if($usuario){
        $_SESSION['usuario'] = $usuario["nombre"];
        header("location:buscador_webservice.php");
    }else{
        echo "Usuario o Contraseña son invalidos";
    }



?>