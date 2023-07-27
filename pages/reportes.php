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
                            <table class="table table-striped table-bordered table-hover datatable-export" >
                                <thead style="background-color: #a66813;border-radius: 5px;color:white;">
                                    <tr>
                                        <th><b>ID</b></th>
                                        <th><b>Descripción de la actividad</b></th>
                                        <th><b>Datos del empleado</b></th>
                                        <th><b>Cargo</b></th>
                                        <th><b>Cantidad de la cosecha</b></th>
                                        <th><b>Material utilizado</b></th>
                                        <th><b>Variedad de mango</b></th>
                                        <th><b>Parcela aplicada</b></th>

                                        <th><b>Fecha de actividad</b></th>
                                        <th><b>Fecha inicio de la cosecha</b></th>
                                        <th><b>Fecha fin de la cosecha</b></th>
                                        <th><b>Operacion</b></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php include("../conexion.php");
                                    $sent = "SELECT p.id_produccion, p.descripcion, u.nombre,u.apellido, 
                                    r.Nombre_rol,p.cantidad_cosecha, m.nombre_mat,man.variedad_mango,par.nombre_parcela,p.fecha_inic_actividad, p.fecha_inic_cosecha, p.fecha_fin_cosecha 
                                    from produccion as p, usuario as u, roles as r, materiales as m,mango as man,parcelas as par 
                                    where p.id_usuario = u.id_usuario AND p.id_mat = m.id_mat AND p.id_mango=man.id_mango AND p.id_parcela = par.id_parcela AND r.Id_rol = u.Id_rol;";
                                    $resp = $conn->query($sent);
                                    while ($arr = $resp->fetch_array()){
                                    ?>
                                    <tr>
                                        <td><?php echo $arr['id_produccion'] ?></td>
                                        <td><?php echo $arr['descripcion'] ?></td>
                                        <td><?php echo $arr['nombre']." ".$arr['apellido'] ?></td>
                                        <td><?php echo $arr['Nombre_rol'] ?></td>
                                        <td><?php echo $arr['cantidad_cosecha'] ?></td>
                                        <td><?php echo $arr['nombre_mat'] ?></td>
                                        <td><?php echo $arr['variedad_mango'] ?></td>

                                        <td><?php echo $arr['nombre_parcela'] ?></td>
                                        <td><?php echo $arr['fecha_inic_actividad'] ?></td>
                                        <td><?php echo $arr['fecha_inic_cosecha'] ?></td>
                                        <td><?php echo $arr['fecha_fin_cosecha'] ?></td>
                                            <td class="center">
                                                <button type="button" class="btn btn-warning"> <i  class="material-icons">delete</i>Eliminar</button>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                    
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
                            <table class="table table-striped table-bordered table-hover datatable-export2" id="RecursosReporte">
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
                                                <button type="button" class="btn btn-warning" > <i  class="material-icons">delete</i>Eliminar</button>
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
    <?php include("partes/scripts.php"); ?>
</body>
</html>