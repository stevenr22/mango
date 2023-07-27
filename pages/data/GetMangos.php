<?php
session_start();
include("../../conexion.php");
date_default_timezone_set("America/Guayaquil");

// Consulta SQL para seleccionar los campos requeridos de la tabla "Variedad"
$sql = "SELECT id_mango as value, variedad_mango as text FROM mango";

$result = $conn->query($sql);

// Verificar si se encontraron registros
if ($result->num_rows > 0) {
    // Array para almacenar los resultados
    $Variedad = array();

    // Recorrer los resultados y almacenarlos en el array
    while ($row = $result->fetch_assoc()) {
        $rol = array(
            'text' => $row['text'],
            'value' => $row['value']
        );
        array_push($Variedad, $rol);
    }

    // Codificar el array como JSON
    $json = json_encode($Variedad);

    // Devolver la respuesta JSON
    header('Content-Type: application/json');
    echo $json;
} else {
    // No se encontraron registros
    echo "No se encontraron Variedades de mango.";
}

// Cerrar la conexión a la base de datos
$conn->close();
?>
