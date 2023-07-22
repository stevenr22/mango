<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

    <link rel="icon" type="image/png" href="../images/mango-and-lef-png.ico"/>
<!--===============================================================================================-->
	<!--BOOTSTRAP CSS-->
    <link rel="stylesheet" type="text/css" href="../vendor/bootstrap/css/bootstrap.min.css">

    <!--SCRIPT-->
    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/metisMenu.min.js"></script>
    <script src="../js/jquery.dataTables.min.js"></script>
    <script src="../js/dataTables.bootstrap.min.js"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>






    <link rel="stylesheet" type="text/css" href="../vendor/bootstrap/css/dataTables.bootstrap4.min.css">
 

<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
    <script src="../vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="../vendor/animsition/js/animsition.min.js"></script>


	<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!----css3---->
    <link rel="stylesheet" href="../css/custom.css">
    
    
    <!--google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">


   <!--google material icon-->
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons"rel="stylesheet">
 

    <!--SCRIPTS-->
    <script src="../js/jquery-3.3.1.slim.min.js"></script>
  
    <script src="../js/jquery-3.3.1.min.js"></script>
    <script src="../js/jquery-3.6.4.js" ></script> <!-- javascript -->

    <script src="../js/bootstrap.bundle.js"></script>


    <script src="../js/jquery.dataTables.min.js"></script>
    <script src="../js/dataTables.bootstrap.min.js"></script>

    <link rel="stylesheet" type="text/css" href="../vendor/bootstrap/css/bootstrap.css">

	<link rel="stylesheet" type="text/css" href="../css/util.css">
	<link rel="stylesheet" type="text/css" href="../css/main.css">
    <link rel="stylesheet" type="text/css" href="../css/all.min.css">




    
 

    <title>Document</title>
</head>
<body>
    <div class="main-content">
        <div class="row">
            <div class="col-md-12">
                <div class="table-wrapper">
                    <div class="table-title">
                        <div class="row">
                            <div class="col-sm-6 p-0 flex justify-content-lg-start justify-content-center">
                                <h2 class="ml-lg-2">EMPLEADOS REGISTRADOS</h2>
                            </div>
                                        
                        </div>
                    </div>
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead style="background-color: #a66813;border-radius: 5px;color:white;">
                            <tr>
                                <th><b>ID</b></th>
                                <th><b>Nombre</b></th>
                                <th><b>Apellido</b></th>
                                <th><b>Nombre de usuario</b></th>
                                <th><b>Rol</b></th>
                                <th><b>Opciones</b></th>


                            </tr>
                        </thead>
                        <tbody>
                          

                                <tr class="odd gradeX">
                                    <td>1</td>
                                    <td>Steven</td>
                                    <td>Rojas</td>
                                    <td>Srojas</td>
                                    <td>Admin</td>


                                    <td class="center">
                                        <button type="button" class="btn btn-success"  onclick="modalcito_aparece()"><i  class="material-icons">edit</i>Actualizar</button>
                                        <button type="button" class="btn btn-danger" onclick="eliminar()"> <i  class="material-icons">delete</i>Eliminar</button>
                                    </td>
                                </tr>

                        </tbody>
                    </table>
                    <!---VENTANA MODAL--->
                    <?php include("../pages/modales/modal_asignar_rol.html");?>
        
        
                     
                  
                        
                    </div>
                </div>
            </div>
            
            
    
</body>
</html>