<?php
session_start();


if(isset($_SESSION['DBid'])==false) header("location:../index.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <?php include("partes/enlaces.php");?>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="../css/misestilos.css">


    <title>Seguimiento</title>

</head>
<body>
    <div class="wrapper">
        <div class="body-overlay"></div>
            <?php include("../pages/partes/menu.php");?>
        <div id="content">
            <?php include("../pages/partes/nav.php");?>
            <div class="main-content">
            <div class="row">
                <!---PRIMERA COLUMNA GRAFICO DE BARRAS-->
                <div class="col-md-6">
                       <div class="card">
                        <div class="card-header">Recursos utilizados</div>

                        <div class="card-body">
                            <canvas id="myChart"></canvas>

                            <script>
                            // Paso 2: Crea un contexto de lienzo utilizando el ID del elemento canvas
                            var ctx = document.getElementById('myChart').getContext('2d');

                            // Paso 3: Define los datos para tu gráfico
                            var data = {
                                labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo'],
                                datasets: [{
                                label: 'Ventas',
                                data: [120, 150, 180, 90, 200],
                                backgroundColor: '#a2231d',
                                borderColor: '#a2231d',
                                borderWidth: 1
                                }]
                            };

                            // Paso 4: Configura y dibuja el gráfico
                            var myChart = new Chart(ctx, {
                                type: 'bar', // Tipo de gráfico (barra en este caso)
                                data: data,
                                options: {
                                responsive: true, // Hacer el gráfico responsive
                                scales: {
                                    y: {
                                    beginAtZero: true
                                    }
                                }
                                }
                            });
                            </script>
                        </div>
                    </div>
                </div>
                <!---PRIMERA COLUMNA GRAFICO DE PASTEL-->
                <div class="col-md-6">
                       <div class="card">
                        <div class="card-header">Producción</div>

                        <div class="card-body">
                            <canvas id="myChart2"></canvas>

                            <script>
                            // Paso 2: Crea un contexto de lienzo utilizando el ID del elemento canvas
                            var ctx = document.getElementById('myChart2').getContext('2d');

                            // Paso 3: Define los datos para tu gráfico
                            var data = {
                                labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo'],
                                datasets: [{
                                label: 'Ventas',
                                data: [120, 150, 180, 90, 200],
                                backgroundColor: '#a2231d',
                                borderColor: 'white',
                                borderWidth: 1
                                }]
                            };

                            // Paso 4: Configura y dibuja el gráfico
                            var myChart = new Chart(ctx, {
                                type: 'pie', // Tipo de gráfico (barra en este caso)
                                data: data,
                                options: {
                                responsive: true, // Hacer el gráfico responsive
                                scales: {
                                    y: {
                                    beginAtZero: true
                                    }
                                }
                                }
                            });
                            </script>
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