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
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">EMPLEADOS REGISTRADOS</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>


                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-success">

                            <!-- /.panel-body -->
                        </div>
                        <!-- /.panel -->
                    </div>
                    <!-- /.col-lg-12 -->
                </div>



                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-danger">
                            <div class="panel-heading">
                                TABLA DE DATOS
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover datatable" id="dataTables-example">
                                        <thead class="bg-warning">
                                            <tr>
                                                <th>ID</th>
                                                <th>Nombre</th>
                                                <th>Apellido</th>
                                                <th>Nombre de usuario</th>
                                                <th>Rol</th>
                                                <th>Opciones</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $sentencia = "SELECT u.id_usuario, u.nomb_usuario, u.nombre, u.apellido, r.Nombre_rol, r.Id_rol FROM usuario as u , roles as r WHERE u.Id_rol=r.Id_rol and r.Activo AND u.Activo";
                                            $respuesta = $db->query($sentencia);
                                            while ($arreglo = $respuesta->fetch_array()) {
                                            ?>

                                                <tr class="odd gradeX">
                                                    <td><?php echo $arreglo['id_usuario'] ?></td>
                                                    <td><?php echo $arreglo['nombre'] ?></td>
                                                    <td><?php echo $arreglo['apellido'] ?></td>
                                                    <td><?php echo $arreglo['nomb_usuario'] ?></td>
                                                    <td><?php echo $arreglo['Nombre_rol'] ?></td>


                                                    <td class="center">
                                                        <button type="button" class="btn btn-warning" onclick="modalcito_aparece('<?php echo $arreglo['id_usuario']; ?>','<?php echo $arreglo['nombre']; ?>','<?php echo $arreglo['apellido']; ?>', '<?php echo $arreglo['nomb_usuario']; ?>','<?php echo $arreglo['Nombre_rol']; ?>','<?php echo $arreglo['Id_rol']; ?>')">ACTUALIZAR</button>
                                                        <button type="button" class="btn btn-danger" onclick="eliminar('<?php echo $arreglo['Id_rol']; ?>')">ELIMINAR</button>
                                                    </td>
                                                </tr>

                                            <?php } ?>

                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.table-responsive -->

                            </div>
                            <!-- /.panel-body -->
                        </div>
                        <!-- /.panel -->
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->
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



