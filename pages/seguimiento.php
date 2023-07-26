<?php
session_start();


if(isset($_SESSION['DBid'])==false) header("location:../index.php");
if ($_SESSION['idrol'] == 2) {
    $_SESSION['MensajeError'] = "No tienes permisos necesarios para acceder a esta dirección!";
    header("location:../pages/index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <?php include("partes/enlaces.php");?>
    <?php include("partes/scripts.php"); ?>

  
   

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
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header" style="background-color: #003400; color:white;">
                                <b>Produccion del mango</b>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div  id="piechart"  style="width: 900px; height: 500px;">

                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header" style="background-color: #003400; color:white;">
                                <b>Recursos utilziados</b>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-12">
                                        sfgfgdf
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
   
            </div>
        </div>
    </div>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
        <?php
            include("../conexion.php");
            $SQL = "SELECT * FROM mango";
            $consulta = mysqli_query($conn, $SQL);
            while ($resultado = mysqli_fetch_assoc($consulta)){
                echo "['" .$resultado['variedad_mango']."', " .$resultado['canti_mango']."],";
        }

        ?>
        ]);

        var options = {
          title: 'Cantidad de mangos producidos'
          
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }



      google.charts.load('current', {packages: ['corechart', 'bar']});
google.charts.setOnLoadCallback(drawBasic);

function drawBasic() {

      var data = new google.visualization.DataTable();
      data.addColumn('timeofday', 'Time of Day');
      data.addColumn('number', 'Motivation Level');

      data.addRows([
       
      ]);

      var options = {
       
        hAxis: {
          title: 'Time of Day',
          format: 'h:mm a',
          viewWindow: {
            min: [7, 30, 0],
            max: [17, 30, 0]
          }
        },
        vAxis: {
          title: 'Cantidad de recursos'
        }
      };

      var chart = new google.visualization.ColumnChart(
        document.getElementById('barras'));

      chart.draw(data, options);
    }

    </script>

   
</body>
</html>