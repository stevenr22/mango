<?php
session_start();
include("../conexion.php");


$rol = $_POST["nombre"];
$des = $_POST["des"];
$id = $_POST["idRol"];
$rol = trim($rol);
if(isset($id)&& isset($des)&& isset($rol)){
    $sql = mysqli_query($conn,"SELECT Nombre_rol FROM roles where (Nombre_rol='$rol' and Activo) and Id_rol != '$id' ");

    $filas=mysqli_num_rows($sql);
    if ($filas<=0) {
        if($registrar = mysqli_query($conn, "UPDATE `roles` SET `Nombre_rol`='$rol',`Descripcion`='$des' WHERE Id_rol='$id' ")){
            $_SESSION['MensajeExito'] = "Rol Actualizado exitosamente";
            echo"<script>history.go(-1)</script>";
        }
    } else {
        $_SESSION['MensajeError'] = "Rol ya registrado";
        echo"<script>history.go(-1)</script>";
    }
}else{
    $_SESSION['MensajeError'] = "Rellene todos los campos $filas";
    echo"<script>history.go(-1)</script>";
}

mysqli_free_result($sql);
mysqli_close($conn);