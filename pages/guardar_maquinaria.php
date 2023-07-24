<?php
session_start();
if(isset($_SESSION['DBid'])==false) header("location:../index.php");
?>
<?php
include("../conexion.php");
$nombre = $_POST["nombre_maqui"];
$cantidad = $_POST["cant_maqui"];
$descri =$_POST["tipo_maqui"];
$tipo = $_POST["descri_maqui"];
$fech_apli = $_POST["fech_maqui"];

$sql = "INSERT INTO materiales (nombre_mat,cantidad_mat,descri_mat,tipo_mat,fecha_mat) 
        VALUES ('$nombre','$cantidad','$descri','$tipo','$fech_apli')";
$respues = mysqli_query($conn,$sql);

if($respues){
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
}else{
    echo'error';
}
?>