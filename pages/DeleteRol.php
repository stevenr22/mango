<?php
session_start();
include("../conexion.php");


$id = $_POST["id"];
echo $id;
if(isset($id)&& $id != null){
    if($registrar = mysqli_query($conn, "UPDATE `roles` SET `Activo`='0' WHERE Id_rol='$id' ")){
        return "ok";
    }else{
        return "error";
    }
}else{
    return "error";
}

mysqli_free_result($registrar);
mysqli_close($conn);