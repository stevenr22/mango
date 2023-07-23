<?php
include("../conexion.php");
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the data from the form
  
    $nom = $_POST["Nnom"];
    $ape = $_POST["Nape"];
    $nom_usu = $_POST["Nnom_usu"];

   

    // Update user information
    $update_user_sql = "UPDATE usuario SET nombre='$nom', apellido='$ape', nomb_usuario='$nom_usu' WHERE nomb_usuario='$nom_usu'";
    if ($conn->query($update_user_sql) === TRUE) {
        echo "correcto";
    } else {
        echo "Error updating user information: " . $conn->error;
    }

    

    // Close the database connection
    $conn->close();
}
?>
