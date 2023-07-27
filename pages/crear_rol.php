<?php
session_start();
if(isset($_SESSION['DBid'])==false) header("location:../index.php");
if($_SESSION['idrol']==2){
    $_SESSION['MensajeError']="No tienes permisos necesarios para acceder a esta dirección!";
    header("location:../pages/index.php");
}
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
                <table class="table table-striped table-bordered table-hover datatable-export">
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
                                                        <button type="button" class="btn btn-success"  onclick="modalcito_aparece('<?php echo $arreglo['Id_rol']; ?>','<?php echo $arreglo['Nombre_rol']; ?>','<?php echo $arreglo['Descripcion']; ?>')"><i  class="material-icons">edit</i>Actualizar</button>
                                                        <button type="button" class="btn btn-danger" onclick="eliminar('<?php echo $arreglo['Id_rol']; ?>','<?php echo $arreglo['Nombre_rol']; ?>')"> <i  class="material-icons">delete</i>Eliminar</button>
                                                    </td>
                                                </tr>

                                            <?php } ?>
                  
                    </tbody>
                </table>         
            </div>
        </div>
    </div>





    <div id="modalcito" class="modal fade" aria-hidden="true" tabindex="-1">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header" style="background-color: #003400; color:white;">
                        <div class="modal-title"><b>Actualizar rol</b></div>
                    </div>
                    <div class="modal-body">
                        <form role="form" method="post" action="EditRol.php" id="formito2">
                        <input id="idRol" name="idRol" hidden>
                            <div class="form-group">
                                <label>Nombre</label>
                                <input class="form-control" type="text" name="nombre" id="Enombre" placeholder="Ingrese el nombre y el apellido">
                            </div>

                            <div class="form-group">
                                <label>Descripción</label>
                                <input class="form-control" type="text" name="des" id="Edes" placeholder="Ingrese cédula">
                            </div>

                            

                            <button type="submit" class="btn btn-success">Guardar Registro</button>
                            <button type="reset" class="btn btn-info">Limpiar Datos</button>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" CLASS="btn btn-danger" onclick="modalcito_seesconde()">CERRAR</button>
                    </div>
                </div>
            </div>
        </div>
    <script>
        function eliminar(id, rol){
                swal.fire({
                    title:'Está seguro?',
                    icon:'warning',
                    text:'Desea eliminar el rol:'+rol,
                    confirmButtonText:'Sí, Eliminar',
                    showDenyButton: true,
                    denyButtonText: `Cancelar`,
                }).then((result) => {
                /* Read more about isConfirmed, isDenied below */
                    if (result.isConfirmed) {
                        $.ajax({
                            url:'DeleteRol.php',
                            type: 'POST',
                            data:{id,},
                            success: function(response){
                                Swal.fire({
                                    title:'Eiminado',
                                    icon:'success',
                                    text:'Desea eliminar el rol:'+rol,
                                    confirmButtonText:'ok',
                                }).then((result) => {
                                /* Read more about isConfirmed, isDenied below */
                                    
                                    location.reload(); // Recarga la página actual
                                    
                                })
                            }
                        });
                    } else if (result.isDenied) {
                        Swal.fire('No se ha eliminado el rol', '', 'info')
                    }
                })
            }
        function modalcito_aparece(id, nom, des){
                $("#modalcito").modal("show");
                $("#Enombre").val(nom);
                $("#idRol").val(id);
                $("#Edes").val(des);
                console.log($("#idRol").val())
            }
            function modalcito_seesconde(){
                $("#modalcito").modal("hide");
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
    
    <?php include("partes/scripts.php"); ?>
</body>
</html>