<?php
  include 'conexion_be.php';
  $Nombre_completo = $_POST['nombrecom'];
  $Correo=$_POST['correocom'];
  $Comet=$_POST['cometarioscom'];
  

  $query= "INSERT INTO comentarios(Nombre,Correo,Comentarios)
            VALUES('$Nombre_completo','$Correo','$Comet')";
//Verificar el correo no se repita en la base de datos

    $ejecutar = mysqli_query($conexion,$query);
    if($ejecutar){
      echo '
      <script>
        alert("Comentario exitoso");
        window.location="../../indexPage.php";
      </script>
      ';
    }else{
      echo '
      <script>
        alert("Comentario no exitoso, intentalo de nuevo");
        window.location="../../indexPage.php";
      </script>
      ';
    }
    mysqli_close($conexion);
?>