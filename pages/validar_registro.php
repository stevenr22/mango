<?php
// Se utiliza para llamar al archivo que contine la conexion a la base de datos
include("../conexion.php");


// Validamos que el formulario y que el boton registro haya sido presionado
if(isset($_POST['btnregistro'])) {

// Obtener los valores enviados por el formulario
$usu = $_POST['Nusu'];
$contra = $_POST['Ncontra'];
$nomb = $_POST['Nnombre'];
$ape = $_POST['Napellido'];
//VALIDAR CAMPOS VACIOS
if (empty($usu) || empty($contra) || empty($nomb) || empty($ape)) {
    ?>
    <?php
    include("registro.html");
    ?>
    <script>
        Swal.fire({
        title: "CAMPOS VACIOS!",
        icon: 'warning'
    })
    </script>
    
    <?php
}else{
    $query = "SELECT * FROM usuario WHERE nomb_usuario = '$usu'";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) > 0) {
        // El usuario ya está registrado, muestra un mensaje de error o realiza alguna acción apropiada
        
        ?>
        <?php
        include("registro.html");
        ?>
        <script>
            Swal.fire({
            title: "USUARIO REGISTRADO!",
            icon: 'warning'
        })
        </script>
            
        <?php
        // Puedes redireccionar al usuario a otra página, mostrar un mensaje de error, etc.
    } else {
        
        $get_idRol = mysqli_query($conn,"SELECT Id_rol FROM roles WHERE Nombre_rol= 'Empleado'");
        $id = mysqli_fetch_array($get_idRol);
        // Insertamos los datos en la base de datos
        $sql = "INSERT INTO usuario (nomb_usuario, contraseña, nombre, apellido,Id_rol) 
        VALUES ('$usu', '$contra', '$nomb','$ape','$id[0]')";
        $resultado =  mysqli_query($conn,$sql);
        if($resultado) {
            // Inserción correcta
            ?>
            <?php
            include("registro.html");
            ?>
            <script>
                Swal.fire({
                title: "DATOS REGISTRADOS CORRECTAMENTE!",
                icon: 'success'
            })
            </script>
                
            <?php
            }
        }




    }
}

?>
