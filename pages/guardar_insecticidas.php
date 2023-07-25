
<?php

include("../conexion.php");
$nombre = $_POST["nomb_insec"];
$cantidad = $_POST["canti_insec"];
$descri =$_POST["descri_insec"];
$tipo = $_POST["tipo_insec"];

$fech_apli = $_POST["fech_apli"];

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