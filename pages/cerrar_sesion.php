<?php
session_start();
if (isset($_POST['btn_cerrar'])) {
    session_destroy();
    header("location: ../index.php");
}
?>