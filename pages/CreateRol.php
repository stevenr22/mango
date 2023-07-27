<?php
session_start();
include("../conexion.php");


$rol = $_POST["nombre"];
$des = $_POST["des"];
$rol = trim($rol); 
if(isset($rol)&& isset($des) && $rol!=null){
    $sql = mysqli_query($conn,"SELECT Nombre_rol FROM roles where Nombre_rol='$rol' and Activo ");

    $filas=mysqli_num_rows($sql);
    if ($filas<=0) {
        if($registrar = mysqli_query($conn, "INSERT INTO roles (Nombre_rol, Descripcion) VALUES ('$rol','$des')")){
            $_SESSION['MensajeExito'] = "Rol registrado exitosamente";
            echo"<script>history.go(-1)</script>";
        }
    } else {
        $_SESSION['MensajeError'] = "Rol ya registrado";
            echo"<script>history.go(-1)</script>";
    }
}else{
    $_SESSION['MensajeError'] = "Rellene todos los campos";
    echo"<script>history.go(-1)</script>";
}
mysqli_free_result($sql);
mysqli_close($conn);