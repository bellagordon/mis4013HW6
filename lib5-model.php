<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {
        'packages':['geochart'],
      });
      google.charts.setOnLoadCallback(drawRegionsMap);

      function drawRegionsMap() {
        var data = google.visualization.arrayToDataTable([
          ['Country', 'Population with Brown Hair (in Hundreds)'],
          ['Germany', 100],
          ['United States', 570],
          ['Brazil', 650],
          ['Canada', 620],
          ['France', 300],
          ['Russia', 550],
          ['Mexico', 600],
          ['Italy', 700],
          ['Australia', 200],
          ['Egypt', 650],
          ['Sweden', 200],
          ['Ireland', 150],
          ['China', 700],
        ]);

        var options = {};

        var chart = new google.visualization.GeoChart(document.getElementById('regions_div'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="regions_div" style="width: 900px; height: 500px;"></div>
  </body>
</html>
