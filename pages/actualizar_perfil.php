<?php
session_start();

// Paso 1: Establecer la conexión a la base de datos
include("../conexion.php");


// Paso 2: Obtener datos del formulario (suponiendo que el formulario tiene un campo 'id' para identificar el registro a actualizar)
if (isset($_POST['id']) && isset($_POST['Nnom']) && isset($_POST['Nape'])&& isset($_POST['Nnom_usu'])) {
    $id = $_POST['id'];
    $Nnom = $_POST['Nnom'];
    $Nape = $_POST['Nape'];
    $Nnom_usu = $_POST['Nnom_usu'];

    // Paso 3: Actualizar los datos en la base de datos
    $sql = "UPDATE usuario SET nombre='$Nnom', apellido='$Nape', nomb_usuario='$Nnom_usu' WHERE id_usuario=$id";

    if ($conn->query($sql) === TRUE) {
        $_SESSION['MensajeExito'] = "Datos actualizados exitosamente";
        header("location: perfil.php");
         exit; 
        
    } else {
        $_SESSION['MensajeError'] = "No se ha podido actualizar los datos";
        header("location: perfil.php");
        exit; 
    }
    
}
// Paso 4: Cerrar la conexión a la base de datos
//$conn->close();
?>
