<?php
session_start();
header("Cache-Control: no-cache, must-revalidate"); // Deshabilitar el almacenamiento en caché
header("Expires: Sat, 1 Jan 2000 00:00:00 GMT"); // Expirar en una fecha pasada
if(isset($_SESSION['DBid'])==false) header("location:../index.php");

?>
<!DOCTYPE html>
<html lang="es">
<head>
  
    <?php include("partes/enlaces.php");?>
    <script src="../js/misfunciones.js"></script>
    <title>Perfil</title>
</head>
<body>
<div class="wrapper">
        <div class="body-overlay"></div>
        <?php include("../pages/partes/menu.php");?>
        <div id="content">
        <?php include("../pages/partes/nav.php");?>
    <!--***************************************************************-->
    <div class="main-content">
       
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="background-color: #003400; color:white;">
                        <b>Perfil</b>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <?php include("../pages/datos_actualizados.php");
                                $datos = obtenerDatos();?>
                            
                                <form role="form" method="post" id="formito">
                                <input type="hidden" name="id" value="<?php echo $_SESSION['DBid']; ?>">

                               
                                    
                                    <div class="form-group">
                                        <div class="form-group">
                                            
                                       
                                            <label><b>Nombres</b></label>
                                            <input class="form-control" type="text" name="Nnom" id="Nnom"readonly value="<?php echo $datos["Nnom"];?>">
                                        </div>

                                        <div class="form-group">
                                            <label><b>Apellidos</b></label>
                                            <input class="form-control" type="text" name="Nape" id="Nape"readonly value="<?php echo $datos["Nape"];?>" >
                                        </div>

                                        <div class="form-group">
                                            <label><b>Nombre de usuario</b></label>
                                            <input class="form-control" type="text" name="Nnom_usu" id="Nnom_usu"readonly value="<?php echo $datos["Nnom_usu"];?>">
                                        </div>

                                

                                        <div class="form-group">
                                            <label><b>Rol</b></label>
                                            <input class="form-control" type="text" name="Nrol" id="Nrol"readonly value="<?php echo $datos["Nrol"];?>">
                                        </div>

                                      

                                        <button type="button" data-toggle="modal" data-target="#modalcito" class="btn btn-success" 
                                        onclick="mostrardatos('<?php echo $datos?>')">Editar</button>
                                    </div>
                                </form>
                                
                           

                                <div class="container">
                                    <!-- The Modal PARA Actualizar-->
                                    <div class="modal fade" aria-labelledby="myModalLabel" data-toggle="modal" tabindex="-1" role="dialog" id="modalcito">
                                        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #003400;">
                                                    <div class="modal-title text-white">
                                                        <h4 class="modal-title" style="color:white;">Editar perfil</h4>
                                                    </div>
                                                    <button type="button" class="close" style="color: white;" data-dismiss="modal">&times;</button>
                                                </div>
                                               
                                                <div class="modal-body">
                                                    <form role="form" method="post" action="../pages/actualizar_perfil.php"  id="formito2">
                                                    <input type="hidden" name="id" value="<?php echo $_SESSION['DBid']; ?>">
                                                        <div class="form-group">
                                                            <label>Nombres</label>
                                                            <input class="form-control" onkeypress="return validarSOLOletras(event)" type="text" name="Nnom" id="NnomE" value="<?php echo $datos["Nnom"];?>" >
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Apellidos</label>
                                                            <input class="form-control" onkeypress="return validarSOLOletras(event)" type="text" name="Nape" id="NapeE" value="<?php echo $datos["Nape"];?>">
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Nombre de usuario</label>
                                                            <input class="form-control" type="text" name="Nnom_usu" id="Nnom_usuE" value="<?php echo $datos["Nnom_usu"];?>">
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Rol</label>
                                                                <input class="form-control" type="text" name="Nrol" id="NrolE"readonly value="<?php echo $datos["Nrol"];?>">

                                                        </div>
                                                        <button type="submit" id="actualizadatos" on class="btn btn-success"><i class="fa fa-paper-plane"></i>Actualizar</button>
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
            </div>
        </div>
    </div>
    <!--***************************************************************-->
    </div>
    <?php include("partes/scripts.php"); ?>
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

            function modalcito_seesconde() {
                $("#modalcito").modal("hide");
            }

            function validarSOLOletras(e){
                let tecla = (document.all) ? e.keyCode : e.which; // 2
                if (tecla==8) return true; // 3
                let patron =/[A-Za-z\s]/; // 4
                let te = String.fromCharCode(tecla); // 5
                return patron.test(te); // 6
		    }

   </script>
    
 
</body>
</html>