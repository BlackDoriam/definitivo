<?php 

	$conexion=mysqli_connect('localhost','root','','login_registro');

 ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios Registrados</title>
    <link rel="stylesheet" href="../assets/css/usuarios.css">
    <link rel="shortcut icon" href="../assets/Perfil/logo.png">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
    </script>
</head>
<body style=" background-image: url(../assets/Fondos/Fondo4.jpg)">
<h1 class="header-title">Usuarios registrados en base de datos</h1>
<br>
<table id="tabla1">
<tr>
    <th>id</th>
    <th>nombre</th>
    <th>correo</th>
    <th>usuario</th>
    <th>contraseña</th>	
    </tr>
    <?php 
    $sql="SELECT * from usuarios";
    $result=mysqli_query($conexion,$sql);

    while($mostrar=mysqli_fetch_array($result)){
     ?>

    <tr>
    <td><?php echo $mostrar ['id']?></td>
    <td><?php echo $mostrar ['Nombre']?></td>
    <td><?php echo $mostrar ['Correo']?></td>
    <td><?php echo $mostrar ['Usuario']?></td>
    <td><?php echo $mostrar ['Contraseña']?></td>
    </tr>
<?php 
}

 ?>
</table>
</body>
<h4><a class="volver" href="../indexPage.php">Home</h4></a>
</html>