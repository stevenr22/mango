<?php
$servidor = "localhost";
$usuario = "root";
$contraseña = "";
$nombre_bd = "control_mango";

// Crear la conexión
$conn = new mysqli($servidor, $usuario, $contraseña, $nombre_bd);
$conn->query("SET NAMES 'utf8'");



?>
