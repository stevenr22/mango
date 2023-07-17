<?php
session_start();
if(isset($_SESSION['DBid'])==false) header("location:../index.php");
?>


<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
    <title>Crear rol</title>
    
    <?php include("partes/enlaces.php");?>

  
</head>
<body>
<div class="wrapper">
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
                            <h2 class="ml-lg-2"><b>ROLES</b></h2>
                        </div>
                                    
                    </div>
				</div>
                <table class="table table-striped table-bordered table-hover"  id="dataTables-example">
                    <thead style="background-color: #a66813;border-radius: 5px;color:white;">
                        <tr>
                                       
                            <th><b>Rol</b></th>
                            <th><b>Descripción</b></th>
                            <th><b>Opciones</b></th>

                        </tr>
                    </thead>
                    <tbody>
                       

                    <?php
                    include("../conexion.php");
                                            $sql = $conn->query("SELECT * FROM roles WHERE Activo=1");
                                            while($arreglo = $sql->fetch_array()){
                                            ?>

                                                <tr class="odd gradeX">
                                                    <td><?php echo $arreglo['Nombre_rol'] ?></td>
                                                    <td><?php echo $arreglo['Descripcion'] ?></td>
                                                    <td class="center">
                                                        <button type="button" class="btn btn-warning" onclick="modalcito_aparece('<?php echo $arreglo['Id_rol']; ?>','<?php echo $arreglo['Nombre_rol']; ?>','<?php echo $arreglo['Descripcion']; ?>')">ACTUALIZAR</button>
                                                        <button type="button" class="btn btn-danger" onclick="eliminar('<?php echo $arreglo['Id_rol']; ?>','<?php echo $arreglo['Nombre_rol']; ?>')">ELIMINAR</button>
                                                    </td>
                                                </tr>

                                            <?php } ?>
                  
                    </tbody>
                </table>         
            </div>
        </div>
    </div>



    <div id="modalcito" class="modal" aria-hidden="true" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-info">
                    <div class="modal-title">Actualizar rol</div>
                </div>
                <div class="modal-body">
                    <form role="form" method="post" action="EditRol.php" id="formito2">
                    <input id="idRol" name="idRol" hidden>
                        <div class="form-group">
                            <label>Nombre</label>
                            <input class="form-control" type="text" name="nombre" id="Enombre" placeholder="Ingrese el rol">
                        </div>

                        <div class="form-group">
                            <label>Descripción</label>
                            <input class="form-control" type="text" name="des" id="Edes" placeholder="Ingrese la descripción">
                        </div>

                        

                        <button type="submit" class="btn btn-success" onclick="modalcito_aparece()">Guardar Registro</button>
                        <button type="reset" class="btn btn-info">Limpiar Datos</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" CLASS="btn btn-danger" data-dismiss="modal" onclick="modalcito_seesconde()">CERRAR</button>
                </div>
            </div>
        </div>
    </div>
    <script>
         function modalcito_aparece(id, nom, des){
                $("#modalcito").modal("show");
                $("#Enombre").val(nom);
                $("#idRol").val(id);
                $("#Edes").val(des);
                console.log($("#idRol").val())
            }
    </script>
    <!--***************************************************************-->
    <!--FORMULARIO PARA INGRESO DE NUEVOS ROLES-->
    <!--***************************************************************-->
    <div class="main-content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="background-color: #003400; color:white;">
                        <b>Registar rol</b>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <form role="form" method="post" action="CreateRol.php" id="rol">

                                    <div class="form-group">
                                        <label><b>Rol</b></label>
                                        <input class="form-control" type="text" name="nombre" id="nombre" placeholder="Ingrese el nombre">
                                    </div>

                                    <div class="form-group">
                                        <label><b>Descripcion</b></label>
                                        <input class="form-control" type="text" name="des" id="des" placeholder="Ingrese brebe descripción">
                                    </div>
                                    <button type="submit" class="btn btn-success"> <i class="fa fa-paper-plane"></i> Guardar</button>
                                                    
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--***************************************************************-->
    <!--MODAL-->
    <!--***************************************************************-->
    
    <!--***************************************************************-->
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