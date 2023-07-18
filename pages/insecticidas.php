<?php
session_start();
if(isset($_SESSION['DBid'])==false) header("location:../index.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("partes/enlaces.php");?>
    <title>Insecticidas</title>
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
                                        <form role="form" method="post" action="">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label><b>Tipo</b></label>
                                                        <input class="form-control" type="text" name="tipo" placeholder="Ingrese el tipo de Insecticida">
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label><b>Descripción</b></label>
                                                        <input class="form-control" type="text" name="DescriInsec" placeholder="Ingrese una breve descripción">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label><b>Tipo</b></label>
                                                        <input class="form-control" type="text" name="tipo" placeholder="Ingrese el tipo de Insecticida">
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label><b>Descripción</b></label>
                                                        <input class="form-control" type="text" name="DescriInsec" placeholder="Ingrese una breve descripción">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label><b>Tipo</b></label>
                                                        <input class="form-control" type="text" name="tipo" placeholder="Ingrese el tipo de Insecticida">
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label><b>Descripción</b></label>
                                                        <input class="form-control" type="text" name="DescriInsec" placeholder="Ingrese una breve descripción">
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