<?php
session_start();
include('../conexion.php');
if(isset($_SESSION['DBid'])==false) header("location:../index.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
   
    
    <title>Inicio</title>
    
    <?php include("partes/enlaces.php");?>
    <link rel="stylesheet" href="../css/misestilos.css">

</head>
<body>
    <div class="wrapper">
        <div class="body-overlay"></div>
            <?php include("../pages/partes/menu.php");?>
        <div id="content">
            <?php include("../pages/partes/nav.php");?>
           
            <br>

            <!--***************************************************************-->
            <div class="main-content">
                <div class="row">
                    <!---PRIMERA COLUMNA-->
                    <div class="col">
                        <div class="card">
                            <div class="card-header">Historia del mango</div>

                            <div class="card-body">
                                   <!-- Contenido de la primera tarjeta -->
                                El mangodfsdf
                            </div>
                        </div>
                    </div>
                    <!---SEGUNDA COLUMNA-->
                    <div class="col">
                        <div class="card">
                            <div class="card-header">Historia del mango</div>

                            <div class="card-body">
                                <!-- Contenido de la primera tarjeta -->
                                El mangodfsdf
                            </div>
                        </div>
                    </div>
                </div><!--FIN PRIMERA FILA-->
                <br>
                    
                 
                <!--TABLA-->

                <div class="row"><!--SEGUNDA FILA-->
                    <div class="col-md-12">
                        <div class="table-wrapper">
                        <div class="table-title" id="mi_titulo">
                            <div class="row">
                                <div class="col-sm-6 p-0 flex justify-content-lg-start justify-content-center">
                                    <h2 class="ml-lg-2"><b>Producción mundial</b></h2>
                                </div>
                                            
                            </div>
                        </div>
                                    



                            <table class="table table-striped table-bordered table-hover" style="border-radius: 5px;" id="dataTables-example">
                                <thead style="background-color: #a66813;border-radius: 5px;color:white;">
                                    <tr>
                                        <th><b>Pais</b></th>
                                        <th><b>Tipo mango</b></th>
                                        <th><b>Descripción</b></th>
                                        <th><b>Detalles</b></th>
                                        <th><b>Precio</b></th>
                                    


                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Ecuador</td>
                                        <td>Kanela</td>
                                        <td>Mango de color rojo</td>
                                        <td>Venta al por mayor</td>
                                        <td>123$</td>

                                    </tr>
                                </tbody>
                            </table>



                                
                        </div>
                    </div>
                </div>

                <br>
                <div class="main-content">
                <div class="row">
                    <!---PRIMERA COLUMNA-->
                    <div class="col">
                        <div class="card">
                            <div class="card-header text-center">Mango tipo: Keitt</div>

                            <div class="card-body text-justify">
                                   <!-- Contenido de la primera tarjeta -->
                                   Los mangos Keitt son de forma oblonga con una piel de color verde pálido a oscuro, 
                                   aunque ocasionalmente tienen un rubor amarillo. El color puede ser engañoso y la única forma real 
                                   de determinar si estos mangos grandes están maduros es al tacto.
                            </div>
                        </div>
                    </div>
                    <!---SEGUNDA COLUMNA-->
                    <div class="col">
                        <div class="card">
                            <div class="card-header text-center">Mango tipo: Ataulfo</div>

                            <div class="card-body text-justify">
                                <!-- Contenido de la primera tarjeta -->
                                Este fruto se caracteriza por un dulce y refrescante sabor. Su composición promedio es de 69% de pulpa, 
                                19% de cáscara y 8.5% de hueso o semilla.Es uno de los mangos favoritos por la gran cantidad de pulpa 
                                que se obtiene de uno solo de sus frutos.
                            </div>
                        </div>
                    </div>
                    <!---TERCERA COLUMNA-->

                    <div class="col">
                        <div class="card">
                            <div class="card-header text-center">Mango tipo: Kent</div>

                            <div class="card-body text-justify">
                                <!-- Contenido de la primera tarjeta -->
                                La carne de este mango es de consistencia media, sin fibras y color anaranjado mandarina. 
                                Además, es muy bajo en calorías y contiene cantidades muy saludables de fibra dietética, vitaminas y 
                                minerales. Tan sólo alrededor de 65 calorías y 2 gramos de fibra por cada 100 g de fruta.

                            </div>
                        </div>
                    </div>
                    <!---CUARTA COLUMNA-->

                    <div class="col">
                        <div class="card">
                            <div class="card-header text-center">Mango tipo: Tommy Atkins</div>
                            <img src="images/mangotommy.jpg">
                            <div class="card-body text-justify" >
                                <!-- Contenido de la primera tarjeta -->
                                El mango Tommy tiene un equilibrio entre dulzura y aroma fresco y ácido. 
                                Es muy valorado por su muy larga vida útil con un poco de magulladuras o 
                                degradación durante el proceso de transporte. 
                                Los mangos Tommy son frutas tropicales de tamaño mediano a grande y piel 
                                de color rojo oscuro en forma ovalada.
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            <!--***************************************************************-->

           

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



