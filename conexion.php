<?php
$servidor = "localhost";
$usuario = "root";
$contraseña = "";
$nombre_bd = "control_mango";

// Crear la conexión
$conn = new mysqli($servidor, $usuario, $contraseña, $nombre_bd);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
echo "Conexión exitosa";
?>
