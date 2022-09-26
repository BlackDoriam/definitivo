<?php
  include 'conexion_be.php';
  $Nombre_completo = $_POST['nombremo'];
  $Correo=$_POST['correomo'];
  $Moti=$_POST['motivo'];
  

  $query= "INSERT INTO formulario(Nombre,Motivo,Correo)
            VALUES('$Nombre_completo','$Correo','$Moti')";
//Verificar el correo no se repita en la base de datos

    $ejecutar = mysqli_query($conexion,$query);
    if($ejecutar){
      echo '
      <script>
        alert("exitoso");
        window.location="../../indexPage.php";
      </script>
      ';
    }else{
      echo '
      <script>
        alert("No exitoso, intentalo de nuevo");
        window.location="../../indexPage.php";
      </script>
      ';
    }
    mysqli_close($conexion);
?>