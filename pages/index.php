<?php
session_start();
include('../conexion.php');
if(isset($_SESSION['DBid'])==false) header("location:../index.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    
    <?php include("partes/enlaces.php");?>
</head>
<body>
    <h1>Bienvenido,
        <?php echo $_SESSION['DBnombre']."4 ". $_SESSION['DBapellido'];?> 
    </h1>
    <form method="post" action="cerrar_sesion.php">
        <button type="submit" name="btn_cerrar" class="btn btn-success">Cerrar Sesion</button>

    </form>


</body>
</html>