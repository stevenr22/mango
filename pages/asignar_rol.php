<?php
session_start();
if(isset($_SESSION['DBid'])==false) header("location:../index.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>

    <?php include("partes/enlaces.php");?>
    <link rel="stylesheet" href="../css/misestilos.css">

    <title>Asignar rol</title>
</head>
<body>
    <div class="body-overlay"></div>
    <?php include("../pages/partes/menu.php");?>
    <div id="content">
        <?php include("../pages/partes/nav.php");?>
    <!--TABLA-->
    <!--***************************************************************-->
    <div class="main-content">
        <div class="row">
            <div class="col-md-12">
                <div class="table-wrapper">
                    <div class="table-title">
                        <div class="row">
                            <div class="col-sm-6 p-0 flex justify-content-lg-start justify-content-center">
                                <h2 class="ml-lg-2">EMPLEADOS REGISTRADOS</h2>
                            </div>
                                        
                        </div>
                    </div>
                            



                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead style="background-color: #a66813;border-radius: 5px;color:white;">
                            <tr>
                                <th><b>ID</b></th>
                                <th><b>Nombre</b></th>
                                <th><b>Apellido</b></th>
                                <th><b>Nombre de usuario</b></th>
                                <th><b>Rol</b></th>
                                <th><b>Opciones</b></th>


                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include("../conexion.php");

                            $senten = "SELECT u.id_usuario, u.nomb_usuario, u.nombre, u.apellido, r.Nombre_rol, r.Id_rol FROM usuario as u , roles as r WHERE u.Id_rol=r.Id_rol and r.Activo AND u.Activo";
                            $respuesta = $conn->query($senten);
                            while ($arreglo = $respuesta->fetch_array()) {
                            ?>

                                <tr class="odd gradeX">
                                    <td><?php echo $arreglo['id_usuario'] ?></td>
                                    <td><?php echo $arreglo['nombre'] ?></td>
                                    <td><?php echo $arreglo['apellido'] ?></td>
                                    <td><?php echo $arreglo['nomb_usuario'] ?></td>
                                    <td><?php echo $arreglo['Nombre_rol'] ?></td>


                                    <td class="center">
                                        <button type="button" class="btn btn-success"  onclick="modalcito_aparece()"><i  class="material-icons">edit</i>Actualizar</button>
                                        <button type="button" class="btn btn-danger" onclick="eliminar()"> <i  class="material-icons">delete</i>Eliminar</button>
                                    </td>
                                </tr>

                            <?php } ?>
                        </tbody>
                    </table>
                    


                          
                </div>
            </div>
        </div>
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