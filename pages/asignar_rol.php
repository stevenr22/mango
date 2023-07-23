<?php
session_start();
if(isset($_SESSION['DBid'])==false) header("location:../index.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>

    <?php include("partes/enlaces.php");?>

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
                                        <button type="button" class="btn btn-success"  data-toggle="modal" data-target="#myModal" ><i  class="material-icons">edit</i>Actualizar</button>
                                        <button type="button" class="btn btn-danger" onclick="eliminar()"> <i  class="material-icons">delete</i>Eliminar</button>
                                    </td>
                                </tr>

                            <?php } ?>
                        </tbody>
                    </table>
                    <div class="container">
  

                        <!-- The Modal -->
                        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="asignar rol" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                
                                    <!-- Modal Header -->
                                    <div class="modal-header" style="background-color: #003400;">
                                        <h4 class="modal-title" style="color:white;">Asignar rol</h4>
                                        <button type="button" class="close" style="color: white;" data-dismiss="modal">&times;</button>
                                    </div>
                                    
                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        <form role="form" method="post" action="editar.php">
                                         
                                            <div class="form-group">
                                                <label><b>Nombres:</b> </label>
                                                <input class="form-control" type="text" name="Nnom" id="Nnom" readonly value="<?php echo $_SESSION['DBnombre']?>">
                                            </div>

                                            <div class="form-group">
                                                <label><b>Apellido</b>s: </label>
                                                <input class="form-control" type="text" name="Nape" id="Nape" readonly value="<?php echo $_SESSION['DBapellido']?>">
                                            </div>

                                            <div class="form-group">
                                                <label><b>Nombre de usuario:</b> </label>
                                                <input class="form-control" type="text" name="Nnom_usu" id="Nnom_usu" readonly value="<?php echo $_SESSION['DBusu']?>">
                                            </div>

                                            <div class="form-group">
                                                <label><b>Rol: </b></label>
                                                <select name="rol" id="rol" class="form-control chzn-select" aria-label="Default select example">
                                                    <option value="1">Gerente</option>
                                                    <option value="2">Administrador</option>
                                                    <option value="3">Empleado</option>

                                                </select>
                                            </div>
                                            <button type="button" onclick="UpdateRol()" class="btn btn-success"><i class="fa fa-paper-plane"></i>Actualizar</button>
                                        </form>
                                    </div>
                                   


                                    
                                    <!-- Modal footer -->
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
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