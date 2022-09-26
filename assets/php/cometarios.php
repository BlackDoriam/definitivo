<?php
  include 'conexion_be.php';
  $Nombre_completo = $_POST['nombrecom'];
  $Correo=$_POST['correo'];
  $Comet=$_POST['cometarioscom'];
  
  //encriptamiento de contraseña
  $contraseña_encrip = hash('sha512',$contraseña);

  $query= "INSERT INTO Comentarios(Nombre,Correo,Comentarios)
            VALUES('$Nombre_completo','$Correo','$Comet')";
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

// <div class="contenedor__login-register" >
// <!--Login-->
//     <!--Register-->
//     <form class="formulario__login">
//     <h2>Comentario</h2>
//     <input type="text" placeholder="Nombre completo" name="nombre">
//     <input type="text" placeholder="Correo" name="correo">
//     <br><br>
//     <textarea placeholder="Comentarios" rows="7" cols="30" name="cometarios"></textarea>
//     <button>Regístrarse</button>
// </form>
// </div>


?>