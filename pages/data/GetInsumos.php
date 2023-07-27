<?php
session_start();
    // Incluir el archivo de conexión
    include("../../conexion.php");
    $Id= $_GET['id'];
    // Obtener el id de sesión
    $id = $_SESSION['DBid'];
    
    // Consulta SQL para obtener los datos de la tabla "mango"
    $sql = "SELECT mt.nombre_mat as label, mt.cantidad_mat as data FROM produccion as p, materiales as mt, mango as m WHERE (p.id_mango = m.id_mango AND p.id_mat = mt.id_mat) AND m.id_mango=".$Id;

    // Ejecutar la consulta
    $result = $conn->query($sql);
    
    // Crear arrays para almacenar los datos numéricos y las etiquetas
    $data = array();
    $labels = array();
    
    if ($result->num_rows > 0) {
        // Recorrer los resultados y almacenar los datos numéricos y las etiquetas en los arrays
        while($filas = $result->fetch_assoc()){
            $data[] = intval($filas['data']); // Convertir a entero para asegurarnos de que sean valores numéricos
            $labels[] = $filas['label'];
        }
    }

    // Cerrar la conexión a la base de datos
    $conn->close();
    
    // Crear un array asociativo con las claves "data" y "label"
    $json_response = json_encode(array('data' => $data, 'label' => $labels));
    
    // Imprimir el JSON
    echo $json_response;
?>
