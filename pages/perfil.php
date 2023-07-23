<?php
session_start();
if(isset($_SESSION['DBid'])==false) header("location:../index.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  
    <?php include("partes/enlaces.php");?>
    <title>Perfíl</title>
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
                        <b>PERFÍL</b>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <form role="form" method="post" action="editar.php" id="formito">

                                    <div class="form-group">
                                        <div class="form-group">
                                            <label><b>Nombres</b></label>
                                            <input class="form-control" type="text" name="Nnom" id="Nnom"readonly value="<?php echo $_SESSION['DBnombre'];?>">
                                        </div>

                                        <div class="form-group">
                                            <label><b>Apellidos</b></label>
                                            <input class="form-control" type="text" name="Nape" id="Nape"readonly value="<?php echo $_SESSION['DBapellido'];?>" >
                                        </div>

                                        <div class="form-group">
                                            <label><b>Nombre de usuario</b></label>
                                            <input class="form-control" type="text" name="Nnom_usu" id="Nnom_usu"readonly value="<?php echo $_SESSION['DBusu'];?>">
                                        </div>

                                

                                        <div class="form-group">
                                            <label><b>Rol</b></label>
                                            <input class="form-control" type="text" name="Nrol" id="Nrol"readonly value="<?php echo $_SESSION['rol'];?>">
                                        </div>

                                        <button type="button" class="btn btn-success" onclick="modalcito_aparece()" data-bs-toggle="tooltip" data-bs-title="Sincronizar producto">Editar</button>
                                    </div>
                                </form>
                                <div class="container">
                                    <!-- The Modal -->
                                    <div class="modal fade" aria-hidden="true" tabindex="-1" role="dialog" id="modalcito">
                                        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #003400;">
                                                    <div class="modal-title text-white">
                                                        <h4 class="modal-title" style="color:white;">Editar perfil</h4>
                                                    </div>
                                                    <button type="button" class="close" style="color: white;" data-dismiss="modal">&times;</button>
                                                </div>
                                                <div class="modal-body">
                                                    <form role="form" method="post"  id="formito2">
                                                        <input type="hidden" id="id_Emp" name="id_Emp">
                                                        <div class="form-group">
                                                            <label>Nombres</label>
                                                            <input class="form-control" type="text" name="Nnom" id="Nnom" value="<?php echo $_SESSION['DBnombre'];?>">
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Apellidos</label>
                                                            <input class="form-control" type="text" name="Nape" id="Nape" value="<?php echo $_SESSION['DBapellido'];?>">
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Nombre de usuario</label>
                                                            <input class="form-control" type="text" name="Nnom_usu" id="Nnom_usu" value="<?php echo $_SESSION['DBusu'];?>">
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Rol</label>
                                                                <input class="form-control" type="text" name="Nrol" id="Nrol"readonly value="<?php echo $_SESSION['rol'];?>">

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
            </div>
        </div>
    </div>
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

        function modalcito_aparece(id, nom, ape, nom_usu, rol, idRol) {
                $("#modalcito").modal("show");
                $("#id_Emp").val(id);
                $("#Nnom").val(nom);
                $("#Nape").val(ape);
                $("#Nnom_usu").val(nom_usu);
                cargarRoles(idRol)
                //$("#rol option:selected").val(idRol);
            }
            function modalcito_seesconde() {
                $("#modalcito").modal("hide");
            }
   </script>
    
 
</body>
</html>