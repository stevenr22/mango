<?php
session_start();
include("../conexion.php");
$nombre = $_POST["nomb_insec"];
$cantidad = $_POST["cantiinsec"];
$descri =$_POST["descri_insec"];
$tipo = $_POST["tipo_insec"];

$fech_apli = $_POST["fech_apli"];

$sql = "INSERT INTO materiales (nombre_mat,cantidad_mat,descri_mat,tipo_mat,fecha_mat) 
        VALUES ('$nombre','$cantidad','$descri','$tipo','$fech_apli')";
$respues = mysqli_query($conn,$sql);

if($respues){
   $_SESSION['MensajeExito'] = "Insecticida registrado exitosamente";
    header("location: perfil.php");
     exit; 
    
} else {
    $_SESSION['MensajeError'] = "No se ha podido registar los datos";
    header("location: perfil.php");
    exit; 
}

?>