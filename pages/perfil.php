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

        <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Perfil</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>


                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-success">
                                <br>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <form role="form" method="post" action="guardaris.php" id="formito">

                                            <div class="form-group">
                                                <div class="form-group">
                                                    <label><b>Nombres</b></label>
                                                    <input class="form-control" type="text" name="Nnom" id="Nnom" value="<?php echo $_SESSION['DBnombre'];?>">
                                                </div>

                                                <div class="form-group">
                                                    <label><b>Apellidos</b></label>
                                                    <input class="form-control" type="text" name="Nape" id="Nape" value="<?php echo $_SESSION['DBapellido'];?>" >
                                                </div>

                                                <div class="form-group">
                                                    <label><b>Nombre de usuario</b></label>
                                                    <input class="form-control" type="text" name="Nnom_usu" id="Nnom_usu" value="<?php echo $_SESSION['DBusu'];?>">
                                                </div>

                                              

                                                <div class="form-group">
                                                    <label><b>Rol</b></label>
                                                    <input class="form-control" type="text" name="Nrol" id="Nrol"readonly value="<?php echo $_SESSION['rol'];?>">
                                                </div>

                                                <button type="submit" class="btn btn-success">Editar</button>
                                            
                                            </form>
                                        </div>
                                        <!-- /.col-lg-6 (nested) -->


                                    </div>
                                    <!-- /.row (nested) -->
                                </div>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.panel -->
                        </div>
                        <!-- /.col-lg-12 -->
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