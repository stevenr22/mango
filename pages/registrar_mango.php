<?php
session_start();
if(isset($_SESSION['DBid'])==false) header("location:../index.php");
?>
<?php
include("../conexion.php");
$var = $_POST["variedad_mango"];
$pes = $_POST["peso_mango"];

$est = $_POST["estadoMango"];
$est_persona = $_POST["estadoPersonalizado"];


$fech = $_POST["fech_mango"];
$cant = $_POST["cantidad_mango"];


if ($est === 'opcion_personalizada') {
    $est_persona = $_POST["estadoPersonalizado"];
    // Guardar la opción personalizada en la base de datos
    $sql = "INSERT INTO mango (variedad_mango,peso_mango,estado_mango,fech_mango,canti_mango) 
            VALUES ('$var','$pes','$est_persona','$fech','$cant')";

    if ($conn->query($sql) === TRUE) {
        ?>
        <?php
        include("insumos.php");
        ?>
        <script>
            Swal.fire({
            title: "RECURSOS ALMACENADOS CORRECTAMENTE!",
            icon: 'success'
        }).then(function() {
        // Redireccionar a otro_archivo.php después de mostrar el SweetAlert
        window.location.href = "../pages/insumos.php";
        });
        </script>
            
        <?php
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}elseif(isset($_POST['estadoMango'])){
    $opcionSeleccionada = $_POST['estadoMango'];
    $sql = "INSERT INTO mango (variedad_mango,peso_mango,estado_mango,fech_mango,canti_mango) 
            VALUES ('$var','$pes','$opcionSeleccionada','$fech','$cant')";

    if ($conn->query($sql) === TRUE) {
        ?>
        <?php
        include("insumos.php");
        ?>
        <script>
            Swal.fire({
            title: "RECURSOS ALMACENADOS CORRECTAMENTE!",
            icon: 'success'
        }).then(function() {
        // Redireccionar a otro_archivo.php después de mostrar el SweetAlert
        window.location.href = "../pages/insumos.php";
        });
        </script>
            
        <?php
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

}




?>