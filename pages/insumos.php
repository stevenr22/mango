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
                                                        <input class="form-control" type="text" name="nomb_insec" placeholder="Ingrese el nombre del químico">
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label><b>Cantidad: </b></label>
                                                        <input class="form-control" type="number" name="canti_insec" placeholder="Ingrese la cantidad">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label><b>Descripción: </b></label>
                                                        <input class="form-control" type="text" name="descri_insec" placeholder="Ingrese una breve descripción">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label><b>Tipo: </b></label>
                                                        <input class="form-control" type="text" name="tipo_insec" placeholder="Ingrese el tipo">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        
                                                        <label><b>Elegir la parcela aplicar: </b></label>
                                                        <select class="form-control chzn-select" id="parcela" name="parcela">
                                                            <option value="1">Primera parcela</option>
                                                            <option value="2">Segunda parcela</option>
                                                            <option value="3">Tercera parcela</option>
                                                            <option value="4">Cuarta parcela</option>
                                                            <option value="5">Quinta parcela</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label><b>Fecha de aplicación: </b></label>
                                                        <input class="form-control" type="date" name="fech_apli">
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
                                                        <input class="form-control" type="text" name="nombre_maqui" placeholder="Ingrese el nombre de la maquinaria">
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label><b>Cantidad: </b></label>
                                                        <input class="form-control" type="number" name="cant_maqui" placeholder="Ingrese la cantidad">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label><b>Tipo: </b></label>
                                                        <input class="form-control" type="text" name="tipo_maqui" placeholder="Ingrese el tipo">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label><b>Descripción: </b></label>
                                                        <input class="form-control" type="text" name="descri_maqui" placeholder="Ingrese una breve descripción">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label><b>Fecha de uso: </b></label>
                                                        <input class="form-control" type="date" name="fech_maqui">
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
                                                        <input class="form-control" type="text" name="nombre_parcela" placeholder="Ingrese el nombre de la parcela">
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label><b>Fecha creación: </b></label>
                                                        <input class="form-control" type="date" name="fech_parcela" placeholder="Ingrese la fecha de creacion">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label><b>Alto: </b></label>
                                                        <input class="form-control" type="number" name="alto_parcela" placeholder="Ingrese el alto">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label><b>Ancho: </b></label>
                                                        <input class="form-control" type="number" name="ancho_parcela" placeholder="Ingrese ancho">
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