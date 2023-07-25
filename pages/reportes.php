<?php
session_start();


if(isset($_SESSION['DBid'])==false) header("location:../index.php");
if($_SESSION['idrol']==2){
    $_SESSION['MensajeError']="No tienes permisos necesarios para acceder a esta dirección!";
    header("location:../pages/index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <?php include("partes/enlaces.php");?>
 
  

    <title>Reportes</title>
</head>
<body>
    <div class="wrapper">
        <div class="body-overlay"></div>
            <?php include("../pages/partes/menu.php");?>
        <div id="content">
            <?php include("../pages/partes/nav.php");?>
            <div class="main-content">
                <!--TABLA PRODUCCION-->
                <!--******************************************************************+-->
                
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-wrapper">
                            <div class="table-title">
                                <div class="row">
                                    <div class="col-sm-6 p-0 flex justify-content-lg-start justify-content-center">
                                        <h2 class="ml-lg-2">Proceso de producción</h2>
                                    </div>
                                                    
                                </div>
                            </div>
                            <table class="table table-striped table-bordered table-hover" id="produccion">
                                <thead style="background-color: #a66813;border-radius: 5px;color:white;">
                                    <tr>
                                        <th><b>ID</b></th>
                                        <th><b>Descripción</b></th>
                                        <th><b>Datos del empleado</b></th>
                                        <th><b>Cargo</b></th>
                                        <th><b>Actividad realizada</b></th>
                                        <th><b>Observaciones</b></th>
                                        <th><b>Fecha de la cosecha</b></th>

                                        <th><b>Reporte</b></th>

                                  


                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Siembra de la semilla del mango</td>
                                        <td>Alejandro Pin</td>
                                        <td>Empleado</td>
                                        <td>Me encargue de sembrar la semilla del mango, en el area x, con la cantidad de agua x</td>
                                        <td>Ninguna novedad</td>
                                        <td>2023-02-12</td>
                                            <td class="center">
                                                <button type="button" class="btn btn-success"  onclick="modalcito_aparece()"><i  class="material-icons">download</i>Descargar</button>
                                                <button type="button" class="btn btn-danger" onclick="eliminar()"> <i  class="material-icons">delete</i>Eliminar</button>
                                            </td>
                                        </tr>
                                </tbody>
                            </table>
                        </div>


                                    
                    </div>
                </div>
            <!--******************************************************************+-->

                            <!--TABLA Seguimiento de recursos-->
                <!--******************************************************************+-->
                
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-wrapper">
                            <div class="table-title">
                                <div class="row">
                                    <div class="col-sm-6 p-0 flex justify-content-lg-start justify-content-center">
                                        <h2 class="ml-lg-2">Recursos utilizados</h2>
                                    </div>
                                                    
                                </div>
                            </div>
                            <table class="table table-striped table-bordered table-hover" id="RecursosReporte">
                                <thead style="background-color: #a66813;border-radius: 5px;color:white;">
                                    <tr>
                                        <th><b>Id</b></th>
                                        <th><b>Nombre</b></th>
                                        <th><b>Tipo</b></th>
                                        <th><b>Descripcion</b></th>
                                        <th><b>Unidades utilizadas</b></th>
                                        <th><b>Fecha</b></th>
                                        <th><b>Reporte</b></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    include("../conexion.php");
                                    $sql = "SELECT id_mat,nombre_mat,tipo_mat,descri_mat,cantidad_mat,fecha_mat FROM materiales";
                                    $res = $conn->query($sql);
                                    while ($arreglo = $res->fetch_array()) {
                                    ?>
                                    <tr>
                                        <td><?php echo $arreglo['id_mat'] ?></td>
                                        <td><?php echo $arreglo['nombre_mat'] ?></td>
                                        <td><?php echo $arreglo['tipo_mat'] ?></td>
                                        <td><?php echo $arreglo['descri_mat'] ?></td>
                                        <td><?php echo $arreglo['cantidad_mat'] ?></td>
                                        <td><?php echo $arreglo['fecha_mat'] ?></td>
                                            <td class="center">
                                                <button type="button" class="btn btn-success"  onclick="modalcito_aparece()"><i  class="material-icons">download</i>Descargar</button>
                                                <button type="button" class="btn btn-danger" onclick="eliminar()"> <i  class="material-icons">delete</i>Eliminar</button>
                                            </td>
                                        </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                        </div>


                                    
                    </div>
                </div>
            <!--******************************************************************+-->

                   
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