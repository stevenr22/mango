<?php
session_start();
include('../conexion.php');
if(isset($_SESSION['DBid'])==false) header("location:../index.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
   
    
    <title>Inicio</title>
    
    <?php include("partes/enlaces.php");?>
</head>

    



<body>
    <div class="wrapper">
        <div class="body-overlay"></div>
        <!--MENU IZQUIERDO-->
        <?php include("../pages/partes/menu.php");
         include("../pages/partes/nav.php");?>
        
        
        

    </div>
 

    <script type="text/javascript">
        $(document).ready(function(){
           $(".xp-menubar").on('click',function(){
             $("#sidebar").toggleClass('active');
             $("#content").toggleClass('active');
           });
           
           $('.xp-menubar,.body-overlay').on('click',function(){
              $("#sidebar,.body-overlay").toggleClass('show-nav');
           });
           
        });
   </script>

    
</body>
</html>



