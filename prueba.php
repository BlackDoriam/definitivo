<?php 

	$conexion=mysqli_connect('localhost','root','','login_registro');

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>id</tr>
        <tr>nombre</tr>
        <tr>correo</tr>
        <tr>usuario</tr>
        <tr>contraseña</tr>
    </tr>
    <?php 
    		$sql="SELECT * from usuarios";
    $result =mysqli_query($conexion,$sql);
    while ($mostrar=mysqli_fetch_array($result)) {
        ?>
    <tr>
        <td><?php echo $mostrar ['id']?></td>
        <td><?php echo $mostrar ['Nombre']?></td>
        <td><?php echo $mostrar ['Correo']?></td>
        <td><?php echo $mostrar ['Usuario']?></td>
        <td><?php echo $mostrar ['Contrasena']?></td>
    </tr>
    <?php
	}
	 ?>
    </table>
</body>
</html>