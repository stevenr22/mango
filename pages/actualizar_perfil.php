<?php
// Paso 1: Establecer la conexión a la base de datos
include("../conexion.php");

// Paso 2: Obtener datos del formulario (suponiendo que el formulario tiene un campo 'id' para identificar el registro a actualizar)
if (isset($_POST['id']) && isset($_POST['Nnom']) && isset($_POST['Nape'])) {
    $id = $_POST['id'];
    $Nnom = $_POST['Nnom'];
    $Nape = $_POST['Nape'];

    // Paso 3: Actualizar los datos en la base de datos
    $sql = "UPDATE usuario SET nombre='$Nnom', apellido='$Nape' WHERE id_usuario=$id";

    if ($conn->query($sql) === TRUE) {
        ?>
        <?php
        include("perfil.php");
        ?>
        <script>
            Swal.fire({
            title: "DATOS ACTUALIZADOS CORRECTAMENTE!",
            icon: 'success'
        }).then(function() {
        // Redireccionar a otro_archivo.php después de mostrar el SweetAlert
        window.location.href = "../pages/perfil.php";
        });
        </script>
            
        <?php
    } else {
        echo"ERROR";
    }
}

// Paso 4: Cerrar la conexión a la base de datos
$conn->close();
?>
