<?php
session_start();
if(isset($_SESSION['DBid'])==false) header("location:../index.php");
?>
<?php
   function obtenerDatos2(){
            include("../conexion.php");
            $id = $_SESSION['DBid'];
            $sql = "SELECT u.id_usuario, u.nomb_usuario, u.nombre, u.apellido, r.Nombre_rol, r.Id_rol 
            FROM usuario as u , roles as r WHERE u.Id_rol=r.Id_rol and r.Activo AND u.Activo AND id_usuario='$id'";

            $result = $conn->query($sql);
            $dato = array();
            if ($result->num_rows > 0) {
                $filas = $result->fetch_assoc();
                //nav
                $dato["nombre"] = $filas["nombre"]." ".$filas["apellido"];
                $dato["rol"] = $filas["Nombre_rol"];
                
               

            } else {
                $dato = "No se encontraron datos";
            }
        
            // Cerrar la conexión a la base de datos
            $conn->close();
        
            return $dato;
        }
?>