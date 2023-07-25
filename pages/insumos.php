<?php
session_start();
if(isset($_SESSION['DBid'])==false) header("location:../index.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <?php include("partes/enlaces.php");?>
    <title>Insumos</title>
</head>
<body>
    <div class="wrapper">
        <div class="body-overlay"></div>
            <?php include("../pages/partes/menu.php");?>
        <div id="content">
            <?php include("../pages/partes/nav.php");?>
            <div class="main-content">
            <div class="row">


                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header" style="background-color: #003400; color:white;">
                                <b>Insecticidas</b>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <form role="form" method="post" action="guardar_insecticidas.php">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label><b>Nombre: </b></label>
                                                        <input class="form-control" type="text" name="nomb_insec" placeholder="Ingrese el nombre del químico" required>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label><b>Cantidad: </b></label>
                                                        <input class="form-control" type="number" name="canti_insec" placeholder="Ingrese la cantidad" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label><b>Descripción: </b></label>
                                                        <input class="form-control" type="text" name="descri_insec" placeholder="Ingrese una breve descripción" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label><b>Tipo: </b></label>
                                                        <input class="form-control" type="text" name="tipo_insec" placeholder="Ingrese el tipo" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                    <?php
                                                    include("../conexion.php");
                                                    // Consulta para obtener los nombres de la tabla "usuarios"
                                                    $sql = "SELECT nombre_parcela FROM parcelas";
                                                    $result = $conn->query($sql);

                                                    // Verificar si hay resultados y almacenarlos en un arreglo
                                                    $nombres_parcelas = array();
                                                    if ($result->num_rows > 0) {
                                                        while ($row = $result->fetch_assoc()) {
                                                            $nombres_parcelas[] = $row["nombre_parcela"];
                                                        }
                                                    }
                                                    ?>
                                                        
                                                        
                                                        
                                                        <label><b>Elegir la parcela aplicar: </b></label>
                                                        <select class="form-control chzn-select" id="parcela" name="parcela" required>
                                                        <?php
                                                        // Generar opciones del select utilizando los nombres obtenidos de la base de datos
                                                        foreach ($nombres_parcelas as $nombre) {
                                                            echo "<option value='$nombre'>$nombre</option>";
                                                        }
                                                        ?>
                                                        </select>
                                                    </div>
                                                    
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label><b>Fecha de aplicación: </b></label>
                                                        <input class="form-control" type="date" name="fech_apli" required>
                                                    </div>
                                                </div>
                                            </div>
                                           
                                            <button type="submit" name="btn_guardar_insecticidas" class="btn btn-success"> <i class="fa fa-paper-plane"></i> Guardar</button>
                                                            
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--MODAL Insecticidas-->

                


                <!--************************************************************************************************************-->
                <!--MAQUINARIA-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header" style="background-color: #003400; color:white;">
                                <b>Maquinaria</b>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <form role="form" method="post" action="guardar_maquinaria.php">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label><b>Nombre: </b></label>
                                                        <input class="form-control" type="text" name="nombre_maqui" placeholder="Ingrese el nombre de la maquinaria" required>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label><b>Cantidad: </b></label>
                                                        <input class="form-control" type="number" name="cant_maqui" placeholder="Ingrese la cantidad" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label><b>Tipo: </b></label>
                                                        <input class="form-control" type="text" name="tipo_maqui" placeholder="Ingrese el tipo" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label><b>Descripción: </b></label>
                                                        <input class="form-control" type="text" name="descri_maqui" placeholder="Ingrese una breve descripción" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label><b>Fecha de uso: </b></label>
                                                        <input class="form-control" type="date" name="fech_maqui" required>
                                                    </div>
                                                </div>
                                            </div>
                                           
                                           

                                          
                                            <button type="submit" class="btn btn-success"> <i class="fa fa-paper-plane"></i> Guardar</button>
                                                            
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header" style="background-color: #003400; color:white;">
                                <b>Parcelas</b>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <form role="form" method="post" action="registrar_parcela.php">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label><b>Nombre parcela: </b></label>
                                                        <input class="form-control" type="text" name="nombre_parcela" placeholder="Ingrese el nombre de la parcela" required>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label><b>Fecha creación: </b></label>
                                                        <input class="form-control" type="date" name="fech_parcela" placeholder="Ingrese la fecha de creacion" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label><b>Alto: </b></label>
                                                        <input class="form-control" type="number" name="alto_parcela" placeholder="Ingrese el alto" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label><b>Ancho: </b></label>
                                                        <input class="form-control" type="number" name="ancho_parcela" placeholder="Ingrese ancho" required>
                                                    </div>
                                                </div>
                                               
                                            </div>
                                            

                                              
                                            </div>
                                            
                                           

                                          
                                            <button type="submit" class="btn btn-success"> <i class="fa fa-paper-plane"></i> Guardar</button>
                                                            
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                     <!--MANGO-->
                    <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header" style="background-color: #003400; color:white;">
                                <b>Mango</b>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <form role="form" method="post" action="registrar_mango.php">
                                            <div class="row">
                                                

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label><b>Fecha compra: </b></label>
                                                        <input class="form-control" type="date" name="fech_mango" placeholder="Ingrese la fecha de compra" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        
                                                        <label><b>Elegir el tipo de mango: </b></label>
                                                        <select class="form-control chzn-select" id="variedad_mango" name="variedad_mango" required>
                                                            <option>Tommy</option>
                                                            <option>Kent</option>
                                                            <option>Kanela</option>
                                                            <option>Keit</option>
                                                            <option>Ataulfo</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label><b>Peso: </b></label>
                                                        <input class="form-control" type="number" name="peso_mango" placeholder="Ingrese el peso" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label><b>Cantidad: </b></label>
                                                        <input class="form-control" type="number" name="cantidad_mango" placeholder="Ingrese la cantidad" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label><b>Elegir estado del mango: </b></label>
                                                       
                                                        <select class="form-control chzn-select" onchange="mostrarInputPersonalizado()" id="estadoMango" name="estadoMango" required>
                                                            <option>Estado de floración</option>
                                                            <option>Estado de cuajado</option>
                                                            <option>Estado de crecimiento y desarrollo</option>
                                                            <option>Estado de maduración</option>
                                                            <option>Estado de cosecha</option>
                                                            <option>Estado de postcosecha</option>
                                                            <option>Estado de comercialización</option>
                                                            <option value="opcion_personalizada">Otro</option>
                                                        
                                                        </select>
                                                        <div id="campoPersonalizado" style="display: none;">
                                                            <label><b>Elegir estado especial del mango: </b></label>
                                                            <input type="text" class="form-control" name="estadoPersonalizado" id="inputPersonalizado">
                                                        </div>                                             
                                                    </div>
                                                </div>
                                               
                                            </div>
                                            

                                              
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
               
                



            </div>
        </div>

    </div>
    <script src="../js/misfunciones.js"></script>
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


        function mostrarInputPersonalizado() {
            var select = document.getElementById("estadoMango");
            var inputPersonalizado = document.getElementById("campoPersonalizado");
        
            if (select.value === "opcion_personalizada") {
            inputPersonalizado.style.display = "block";
            } else {
            inputPersonalizado.style.display = "none";
            }
        }
  



       

     
   
   </script>
   
    
</body>
</html>


