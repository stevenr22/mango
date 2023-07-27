<?php
session_start();


if(isset($_SESSION['DBid'])==false) header("location:../index.php");
if ($_SESSION['idrol'] == 2) {
    $_SESSION['MensajeError'] = "No tienes permisos necesarios para acceder a esta dirección!";
    header("location:../pages/index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <?php include("partes/enlaces.php");?>
    <?php include("partes/scripts.php"); ?>






    <title>Seguimiento</title>

</head>

<body>
    <div class="wrapper">
        <div class="body-overlay"></div>
        <?php include("../pages/partes/menu.php");?>
        <div id="content">
            <?php include("../pages/partes/nav.php");?>
            <div class="main-content">

                <?php include("../pages/graficos.php");?>



            </div>
        </div>
    </div>

    <script type="text/javascript">



    </script>
    <!-- ChartJS -->
   


</body>

</html>