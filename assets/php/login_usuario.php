<?php

session_start();

include 'conexion_be.php';
$correo = $_POST['correo'];
$contraseña = $_POST['contrase'];
/* $contraseña = hash('sha512',$contraseña); */
/*$passHash = password_hash($contraseña, PASSWORD_BCRYPT);*/

$validar_login = mysqli_query($conexion, "SELECT * FROM  usuarios WHERE correo = '$correo' and contraseña = '$contraseña'");

if(mysqli_num_rows($validar_login) > 0){
    $_SESSION['usuario' ] = $correo;
    header("Location:../../indexpage.php");
    exit;
}else{
    echo'
    <script>
        alert("Usuario no existe, retifique valores introducidos");
        window.location = "../../indexpage.php";
    </script>
    ';
    exit;
}  
?>