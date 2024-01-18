<html>

<head>

  <title>ChartJS - bar</title>

  <!-- Latest CSS -->

 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

</head>

<body>
<?php
                    foreach ($chart_data1 as $row) {
                        extract((array)$row);
                        echo "['{$preaid}', {$ratings}],";
                    } ?>
  <div class="chart-container">

    <div class="bar-chart-container">

      <canvas id="bar-chart"></canvas>

    </div>

  </div>
  
  <div id="container">
	<h1>Statistik Penjualan Kendaraan di Indonesia</h1>
	<div id="visualization"></div>
</div>
<div id="piechart"></div>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);
// Draw the chart and set the chart values
function drawChart() {
var data = google.visualization.arrayToDataTable([
['Task', 'Page visit per Day'],
<?php
                    foreach ($chart_data1 as $row) {
                        extract((array)$row);
                        echo "['{$preaid}', {$ratings}],";
                    } ?>
					
//['PHP', 8],
//['JAVA', 8],
//['SQL', 4],
//['Wordpress', 2],
//['JSP', 2]
]);
// Optional; add a title and set the width and height of the chart
//var options = {'title':'My Average page visit per Day', 'width':550, 'height':400};
var options = {

        responsive: true,

        title: {

          display: true,

          position: "top",

          text: "Monthly Registered Users Count",

          fontSize: 18,

          fontColor: "#111"

        },

        legend: {

          display: true,

          position: "bottom",

          labels: {

            fontColor: "#333",

            fontSize: 16

          }

        }

      };

// Display the chart inside the <div> element with id="piechart"
var chart = new google.visualization.PieChart(document.getElementById('piechart'));
chart.draw(data, options);
}
</script>
  <!-- javascript -->

   <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js"></script>
   
   <script type="text/javascript" src="http://www.google.com/jsapi"></script>

   <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script> 

</body>

</html>

  <!-- javascript -->
<script type="text/javascript">
       //load package
       google.load('visualization', '1', {packages: ['corechart']});
 </script>
   
<script>

  $(function(){

      //get the bar chart canvas

      var cData = JSON.parse(`<?php echo $chart_data; ?>`);

      var ctx = $("#bar-chart");

 

      //bar chart data

      var data = {

        labels: cData.label,

        datasets: [

          {

            label: cData.label,

            data: cData.data,

            backgroundColor: [

              "#DEB887",

              "#A9A9A9",

              "#DC143C",

              "#F4A460",

              "#2E8B57",

              "#1D7A46",

              "#CDA776",

              "#CDA776",

              "#989898",

              "#CB252B",

              "#E39371",

            ],

            borderColor: [

              "#CDA776",

              "#989898",

              "#CB252B",

              "#E39371",

              "#1D7A46",

              "#F4A460",

              "#CDA776",

              "#DEB887",

              "#A9A9A9",

              "#DC143C",

              "#F4A460",

              "#2E8B57",

            ],

            borderWidth: [1, 1, 1, 1, 1,1,1,1, 1, 1, 1,1,1]

          }

        ]

      };

 

      //options

      var options = {

        responsive: true,

        title: {

          display: true,

          position: "top",

          text: "Monthly Registered Users Count",

          fontSize: 18,

          fontColor: "#111"

        },

        legend: {

          display: true,

          position: "bottom",

          labels: {

            fontColor: "#333",

            fontSize: 16

          }

        }

      };

 

      //create bar Chart class object

      var chart1 = new Chart(ctx, {

        type: "bar",

        data: data,

        options: options

      });

 

  });

</script>

<!--PIE CHART-->

<script type="text/javascript">
            function drawVisualization() {
                // Create and populate the data table.
                var data = google.visualization.arrayToDataTable([
                    ['PL', 'Ratings'],
                    <?php
                    foreach ($chart_data as $row) {
                        extract($row);
                        echo "['{$preaid}', {$ratings}],";
                    } ?>
					
                ]);
                // Create and draw the visualization.
                new google.visualization.PieChart(document.getElementById('visualization')).
                draw(data, {title:"Data Penjualan Kendaraan Bermotor Tahun 2015"});
            }

            google.setOnLoadCallback(drawVisualization);
        </script>