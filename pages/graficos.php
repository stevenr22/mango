<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <!-- AREA CHART -->
                <div class="card card-primary">
                    <div class="card-header" style="background-color: #003400; color:white;">
                        <h3 class="card-title">Recursos utilizados</h3>


                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <select name="" id="mango" class="form-control" onchange="LoadChart()">
                            <option value="-1">Seleccione</option>
                        </select>
                        </div>
                        
                        <div class="chart">
                            <canvas id="areaChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div><br>
                <!-- /.card -->



                <!-- PIE CHART -->
                <div class="card card-danger">
                    <div class="card-header" style="background-color: #003400; color:white;">
                        <h3 class="card-title">Producción de mangos</h3>


                    </div>
                    <div class="card-body">
                        <canvas id="pieChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->

            </div>
            <!-- /.col (LEFT) -->

        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>
<script>
    function cargarMangos() {
        // Realizar la solicitud GET a GetRoles.php
        fetch('data/GetMangos.php')
            .then(response => response.json())
            .then(data => {
                console.log(data)
                // Obtener la referencia al select
                var select = document.getElementById('mango');

                // Vaciar el contenido actual del select
                select.innerHTML = '';

                // Recorrer los datos y crear las opciones del select
                data.forEach(item => {
                    var option = document.createElement('option');
                    option.value = item.value;
                    option.text = item.text;

                    // Establecer el valor seleccionado (por ejemplo, si Id_rol es 2)
                    /* if (rol.Id_rol === id) {
                        option.selected = true;
                    } */

                    select.appendChild(option);
                });
            })
            .catch(error => {
                console.error('Error:', error);
            });
    }

    function LoadChart(id=null) {
        if(id ==null) id=$("#mango option:selected").val();
        console.warn(id);
        $.ajax({
            url: "data/GetInsumos.php",
            data: {id: id},
            method: "GET",
            success: function(response) {
                var data = JSON.parse(response)
                var areaChartCanvas = $('#areaChart').get(0).getContext('2d')

                var areaChartData = {
                    labels: data.label,
                    datasets: [{
                            label: 'Digital Goods',
                            backgroundColor: 'rgba(60,141,188,0.9)',
                            borderColor: 'rgba(60,141,188,0.8)',
                            pointRadius: false,
                            pointColor: '#3b8bba',
                            pointStrokeColor: 'rgba(60,141,188,1)',
                            pointHighlightFill: '#fff',
                            pointHighlightStroke: 'rgba(60,141,188,1)',
                            data: data.data
                        },

                    ]
                }

                var areaChartOptions = {
                    maintainAspectRatio: false,
                    responsive: true,
                    legend: {
                        display: false
                    },
                    scales: {
                        xAxes: [{
                            gridLines: {
                                display: false,
                            }
                        }],
                        yAxes: [{
                            gridLines: {
                                display: false,
                            }
                        }]
                    }
                }

                new Chart(areaChartCanvas, {
                    type: 'line',
                    data: areaChartData,
                    options: areaChartOptions
                })
            },
            error: function(xhr, status, error) {
                console.error(error);
            }
        });
    }
    $(document).ready(function() {
        cargarMangos();
        LoadChart(1);


        $.ajax({
            url: "data/GetMango.php",
            method: "GET",
            success: function(response) {
                var data = JSON.parse(response)
                // Get context with jQuery - using jQuery's .get() method.
                var pieChartCanvas = $('#pieChart').get(0).getContext('2d')
                var pieData = {
                    labels: data.label,
                    datasets: [{
                        data: data.data,
                        backgroundColor: ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
                    }]
                }

                var pieOptions = {
                    maintainAspectRatio: false,
                    responsive: true,
                }
                //Create pie or douhnut chart
                // You can switch between pie and douhnut using the method below.
                new Chart(pieChartCanvas, {
                    type: 'pie',
                    data: pieData,
                    options: pieOptions
                })
            },
            error: function(xhr, status, error) {
                console.error(error);
            }
        });

    })
</script>