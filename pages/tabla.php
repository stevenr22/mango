<?php
session_start();
if(isset($_SESSION['DBid'])==false) header("location:../index.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="stylesheet" href="../css/bootstrap.min.css">

    <title>Document</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <h1 class="page-header">EMPLEADOS REGISTRADOS</h1>

            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-danger">
                    <div class="panel-heading">
                        TABLA DE DATOS
                    </div>
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
                                    include("../conexion.php");
                                            $sentencia = "SELECT u.id_usuario, u.nomb_usuario, u.nombre, u.apellido, r.Nombre_rol, r.Id_rol FROM usuario as u , roles as r WHERE u.Id_rol=r.Id_rol and r.Activo AND u.Activo";
                                            $respuesta = $conn->query($sentencia);
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
                        </div>
                </div>

            </div>
        </div>
    </div>
    
    <!-- /#wrapper -->
    <script>
        $(document).ready(function() {
                    $('.datatable').DataTable({
                    "language": {
                        "processing": "Procesando...",
                        "lengthMenu": "Mostrar _MENU_ registros",
                        "zeroRecords": "No se encontraron resultados",
                        "emptyTable": "Ningún dato disponible en esta tabla",
                        "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                        "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
                        "infoFiltered": "(filtrado de un total de _MAX_ registros)",
                        "search": "Buscar:",
                        "infoThousands": ",",
                        "loadingRecords": "Cargando...",
                        "paginate": {
                            "first": "Primero",
                            "last": "Último",
                            "next": "Siguiente",
                            "previous": "Anterior"
                        },
                    }
                });
                });
    </script>
  
</body>
</html>