<?php
session_start();
if(isset($_SESSION['DBid'])==false) header("location:../index.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <!-- jQuery -->
    <script src="../js/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../js/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="../js/dataTables/jquery.dataTables.min.js"></script>
    <script src="../js/dataTables/dataTables.bootstrap.min.js"></script>

    <?php include("partes/enlaces.php");?>

 

   

    <title>Asignar rol</title>
</head>
<body>
    <div class="body-overlay"></div>
            <?php include("../pages/partes/menu.php");?>
        <div id="content">
            <?php include("../pages/partes/nav.php");?>
            <!--COLOCAR TABLA-->
            <div class="container-fluid"><br>
                <div class="row">
                    <div class="col">
                        <h3 class="page-header" style=" border-radius: 5px; font-weight:bold; color:black;">EMPLEADOS REGISTRADOS</h3>
                    </div>
                </div><br>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-danger">
                           
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover datatable" id="dataTables-example">
                                        <thead style="background-color: #a66813;border-radius: 5px;color:white;">
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
                                                            <button type="button" class="btn btn-warning" onclick="modalcito_aparece('<?php echo $arreglo['id_usuario']; ?>','<?php echo $arreglo['nombre']; ?>','<?php echo $arreglo['apellido']; ?>', '<?php echo $arreglo['nomb_usuario']; ?>','<?php echo $arreglo['Nombre_rol']; ?>')">ACTUALIZAR</button>
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

           



    </div>
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
    <script src="../js/jquery.dataTables.min.js"></script>
    <script src="../js/dataTables.bootstrap.min.js"></script>

  
    
   
    
</body>
</html>