<?php
session_start();
if (isset($_SESSION['DBid']) == false) header("location:../index.php");
if ($_SESSION['idrol'] == 2 || $_SESSION['idrol'] == 3) {
    $_SESSION['MensajeError'] = "No tienes permisos necesarios para acceder a esta dirección!";
    header("location:../pages/index.php");
}
?>
<!DOCTYPE html>
<html lang="es">

<head>

    <?php include("partes/enlaces.php"); ?>

    <title>Asignar rol</title>
</head>

<body>
    <div class="body-overlay"></div>
    <?php include("../pages/partes/menu.php"); ?>
    <div id="content">
        <?php include("../pages/partes/nav.php"); ?>
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




                        <table class="table table-striped table-bordered table-hover datatable-export3" >
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
                                            <!-- <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal"><i class="material-icons">edit</i>Actualizar</button> -->
                                            <button type="button" class="btn btn-success" onclick="modalcito_aparece('<?php echo $arreglo['id_usuario']; ?>','<?php echo $arreglo['nombre']; ?>','<?php echo $arreglo['apellido']; ?>', '<?php echo $arreglo['nomb_usuario']; ?>','<?php echo $arreglo['Nombre_rol']; ?>','<?php echo $arreglo['Id_rol']; ?>')" data-bs-toggle="tooltip" data-bs-title="Sincronizar producto"><i class="material-icons">edit</i></button>
                                            <button type="button" class="btn btn-danger" onclick="eliminar()"> <i class="material-icons">delete</i></button>
                                        </td>
                                    </tr>

                                <?php } ?>
                            </tbody>
                        </table>
                        <div class="container">
                            <!-- The Modal -->
                            <div class="modal fade" aria-hidden="true" tabindex="-1" role="dialog" id="modalcito">
                                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color: #003400;">
                                            <div class="modal-title text-white">
                                                <h4 class="modal-title" style="color:white;">Asignar rol</h4>
                                            </div>
                                            <button type="button" class="close" style="color: white;" data-dismiss="modal">&times;</button>
                                        </div>
                                        <div class="modal-body">
                                            <form role="form" method="post" action="editaris.php" id="formito2">
                                                <input type="hidden" id="id_Emp" name="id_Emp">
                                                <div class="form-group">
                                                    <label>Nombres</label>
                                                    <input class="form-control" type="text" name="Nnom" id="Nnom" readonly value="Valor no editable">
                                                </div>

                                                <div class="form-group">
                                                    <label>Apellidos</label>
                                                    <input class="form-control" type="text" name="Nape" id="Nape" readonly value="Valor no editable">
                                                </div>

                                                <div class="form-group">
                                                    <label>Nombre de usuario</label>
                                                    <input class="form-control" type="text" name="Nnom_usu" id="Nnom_usu" readonly value="Valor no editable">
                                                </div>

                                                <div class="form-group">
                                                    <label>Rol</label>
                                                    <select name="rol" id="rol" class="form-control" aria-label="Default select example">

                                                    </select>
                                                </div>
                                                <button type="button" onclick="UpdateRol()" class="btn btn-success"><i class="fa fa-paper-plane"></i>Actualizar</button>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" CLASS="btn btn-danger" onclick="modalcito_seesconde()">CERRAR</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>



                    </div>
                </div>
            </div>
        </div>

    <?php include("partes/scripts.php"); ?>
    <script type="text/javascript">
        function UpdateRol() {
            let id_emp = $("#id_Emp").val();
            let id_rol = $("#rol option:selected").val();

            // Verificar si los IDs están presentes
            if (id_emp && id_rol) {
                // Objeto con los datos a enviar
                let data = {
                    id_emp: id_emp,
                    id_rol: id_rol
                };

                // Realizar la solicitud AJAX
                $.ajax({
                    url: 'SetRol.php',
                    method: 'POST',
                    data: data,
                    dataType: 'json',
                    success: function(response) {
                        // Verificar si la actualización se realizó correctamente
                        if (response.success) {
                            swal.fire("Transacción exitosa", response.message, "success").then((result) => {
                                /* Read more about isConfirmed, isDenied below */
                                location.reload();
                            });
                        } else {
                            swal.fire("Error", "Error: " + response.message, "error");
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error('Error:', error);
                    }
                });
            } else {
                swal.fire("Advertencia", "Debe seleccionar un empleado y un rol.", "warning");
            }
        }

        function modalcito_seesconde() {
            $("#modalcito").modal("hide");
        }

        function cargarRoles(id) {
            // Realizar la solicitud GET a GetRoles.php
            fetch('GetRoles.php')
                .then(response => response.json())
                .then(data => {
                    // Obtener la referencia al select
                    var select = document.getElementById('rol');

                    // Vaciar el contenido actual del select
                    select.innerHTML = '';

                    // Recorrer los datos y crear las opciones del select
                    data.forEach(rol => {
                        var option = document.createElement('option');
                        option.value = rol.Id_rol;
                        option.text = rol.Nombre_rol;

                        // Establecer el valor seleccionado (por ejemplo, si Id_rol es 2)
                        if (rol.Id_rol === id) {
                            option.selected = true;
                        }

                        select.appendChild(option);
                    });
                })
                .catch(error => {
                    console.error('Error:', error);
                });
        }

        function modalcito_aparece(id, nom, ape, nom_usu, rol, idRol) {
            $("#modalcito").modal("show");
            $("#id_Emp").val(id);
            $("#Nnom").val(nom);
            $("#Nape").val(ape);
            $("#Nnom_usu").val(nom_usu);
            cargarRoles(idRol)
            //$("#rol option:selected").val(idRol);
        }
    </script>
</body>

</html>