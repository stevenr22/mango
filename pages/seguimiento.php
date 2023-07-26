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
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header" style="background-color: #003400; color:white;">
                                <b>Produccion del mango</b>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div  id="piechart" >

                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header" style="background-color: #003400; color:white;">
                                <b>Recursos utilziados</b>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-12">
                                        sfgfgdf
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
   
            </div>
        </div>
    </div>
    
    <script type="text/javascript">
    

    </script>

   
</body>
</html>