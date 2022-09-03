<?php
  include 'conexion_be.php';
  $Nombre_completo = $_POST['nombre'];
  $Correo=$_POST['correo'];
  $Usuario=$_POST['usuario'];
  $Contraseña=$_POST['contraseña'];
  
  //encriptamiento de contraseña
  $contraseña_encrip = hash('sha512',$contraseña);

  $query= "INSERT INTO usuarios(Nombre,Correo,Usuario,Contraseña)
            VALUES('$Nombre_completo','$Correo','$Usuario','$Contraseña')";
//Verificar el correo no se repita en la base de datos

$verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo ='$Correo'");
if(mysqli_num_rows($verificar_correo) > 0){
  echo '
  <script>
  alert("Error, el correo ya existe en la base de datos, intenta con otro diferente")
  window.location="../../index.php";
  </script>
  ';
  
  exit();
}


$verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario ='$Usuario'");
if(mysqli_num_rows($verificar_usuario) > 0){
  echo '
  <script>
  alert("Error, el usuario ya existe en la base de datos, intenta con otro diferente")
  window.location="
  index.php";
  </script>
  ';
  exit();
}
    $ejecutar = mysqli_query($conexion,$query);
    if($ejecutar){
      echo '
      <script>
        alert("Usuario registrado exitosamente");
        window.location="../../index.php";
      </script>
      ';
    }else{
      echo '
      <script>
        alert("Usuario no registrado, intentalo de nuevo");
        window.location="../../index.php";
      </script>
      ';
    }
    mysqli_close($conexion);
?>