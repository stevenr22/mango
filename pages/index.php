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

                            <div class="card-body text-justify">
                                   <!-- Contenido de la primera tarjeta -->
                                   <b>¿Quién no disfruta de un buen mango como postre rico y nutritivo?</b><br>
                                   El mango procede originariamente del área indobirmana, probablemente cultivada por el hombre desde hace más de 4000 años.
                                   India, donde todavía hoy crecen selvas de mangos silvestres, sigue siendo la zona de cultivo principal de esta planta. 
                                   Los mangos se han extendido a casi todas las áreas tropicales: hacia el sur y sudeste de Asia, a Australia, Madagascar, al este de África, Brasil, y Centroamérica.
                                   Crece también en zonas subtropicales de clima favorable como Florida, Sudáfrica, Israel, Chipre y Egipto.
                                   El mango es el tercer fruto tropical en términos de producción e importación a nivel mundial, inmediatamente situado tras el plátano y la piña tropical 
                                   y el quinto de todos los frutos.
                            </div>
                        </div>
                    </div>
                    <!---SEGUNDA COLUMNA-->
                    <div class="col">
                        <div class="card">
                            <div class="card-header">Beneficios</div>

                            <div class="card-body text-justify">
                                <!-- Contenido de la primera tarjeta -->
                                Su textura agradable y su sabor dulce hace del mango una de las frutas más consumidas en todo el planeta. 
                                Pero su atractivo no reside únicamente en lo gastronómico, sino también en sus aportes nutricionales y dietéticos:
                                los mangos contienen más de 20 vitaminas y otros tantos minerales.<br>
                                1. Previene el asma <br>
                                2. Ofrece una ayuda contra el cáncer <br>
                                3. Mejora la salud ocular <br>
                                4. Protege los huesos <br>
                                5. Especial para pacientes con enfermedades cardiacas
            
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

                                    <tr>
                                        <td>China</td>
                                        <td>Keitt</td>
                                        <td>Mango de color verde</td>
                                        <td>Venta al por mayor</td>
                                        <td>103$</td>

                                    </tr>
                                    <tr>
                                        <td>India</td>
                                        <td>Kanela</td>
                                        <td>Mango de color rojo</td>
                                        <td>Venta al por mayor</td>
                                        <td>120$</td>

                                    </tr>
                                    <tr>
                                        <td>México</td>
                                        <td>Atulfo</td>
                                        <td>Mango de color amarillo</td>
                                        <td>Venta al por mayor</td>
                                        <td>150$</td>

                                    </tr>
                                    <tr>
                                        <td>Malawi</td>
                                        <td>Kanela</td>
                                        <td>Mango de color rojo</td>
                                        <td>Venta al por mayor</td>
                                        <td>200$</td>

                                    </tr>
                                    <tr>
                                        <td>Tailandia</td>
                                        <td>Kanela</td>
                                        <td>Mango de color rojo</td>
                                        <td>Venta al por mayor</td>
                                        <td>180$</td>

                                    </tr>
                                    <tr>
                                        <td>Indonesia</td>
                                        <td>Kanela</td>
                                        <td>Mango de color rojo</td>
                                        <td>Venta al por mayor</td>
                                        <td>150$</td>

                                    </tr>
                                    <tr>
                                        <td>Egipto</td>
                                        <td>Tommy Atkins</td>
                                        <td>Mango de color rojizo</td>
                                        <td>Venta al por mayor</td>
                                        <td>220$</td>

                                    </tr>
                                    <tr>
                                        <td>Pakistán</td>
                                        <td>Kanela</td>
                                        <td>Mango de color rojo</td>
                                        <td>Venta al por mayor</td>
                                        <td>200$</td>

                                    </tr>
                                    <tr>
                                        <td>Brasil</td>
                                        <td>Kanela</td>
                                        <td>Mango de color rojo</td>
                                        <td>Venta al por mayor</td>
                                        <td>160$</td>

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
                            <img src="images/mangotommy.jpg" width="50" height="50">
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



