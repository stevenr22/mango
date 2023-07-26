<?php
include("../conexion.php");

?>

<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
<?php
          $SQL = "SELECT * FROM usuario";
          $consulta = mysqli_query($conn, $SQL);
          while ($resultado = mysqli_fetch_assoc($consulta)){
            echo "['" .$resultado['nombre']."', " .$resultado['id_usuario']."],";
          }

?>
        ]);

        var options = {
          title: 'Mi Grafica de Barras'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body style="background-color: aqua;">
    <div id="piechart" style="width: 900px; height: 500px; background-color:red;"></div>
  </body>
</html>
