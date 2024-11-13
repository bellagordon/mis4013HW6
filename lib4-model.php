<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Class',     4],
          ['Eat',      2],
          ['Study',  4],
          ['Watch TV', 3],
          ['Scroll on Phone', 3],
          ['Sleep', 8]
        ]);

     var options = {
          title: 'Daily Routine',
          titleTextStyle: {
            fontWeight: 'bold', // Make the title bold
            fontSize: 24,       // Optionally adjust the font size
          },
          pieHole: 0.4
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="donutchart" style="width: 900px; height: 500px;"></div>
  </body>
</html>
