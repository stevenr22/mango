<?php
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the data from the form
  
    $nom = $_POST["Nnom"];
    $ape = $_POST["Nape"];
    $nom_usu = $_POST["Nnom_usu"];

    // You can do some validation here if needed

    // Connect to the database
    $db_host = "localhost"; // Replace with your actual database host
    $db_username = "root"; // Replace with your actual database username
    $db_password = ""; // Replace with your actual database password
    $db_name = "control_mango"; // Replace with your actual database name

    $conn = new mysqli($db_host, $db_username, $db_password, $db_name);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Update user information
    $update_user_sql = "UPDATE usuario SET nombre='$nom', apellido='$ape', nomb_usuario='$nom_usu' WHERE nomb_usuario='$nom_usu'";
    if ($conn->query($update_user_sql) === TRUE) {
        ?>
        <?php
        include("perfil.php");
        ?>
        <script>
            Swal.fire({
            title: "CAMPOS ACTUALIZADOS!",
            icon: 'success'
            
        }).then(function() {
            // Perform the redirection after the SweetAlert dialog is closed
            window.location.href = "../pages/perfil.php";
        })
        </script>
        
        <?php
        header("location:perfil.php");
        ?>
        <?php
    } else {
        echo "Error updating user information: " . $conn->error;
    }

    

    // Close the database connection
    $conn->close();
}
?>
