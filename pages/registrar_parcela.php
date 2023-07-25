
<?php
include("../conexion.php");
$nombre = $_POST["nombre_parcela"];
$fech = $_POST["fech_parcela"];
$alt = $_POST["alto_parcela"];
$anch =$_POST["ancho_parcela"];




$sql = "INSERT INTO parcelas (fecha_parcela,nombre_parcela,alto,ancho) 
        VALUES ('$fech','$nombre','$alt','$anch')";
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