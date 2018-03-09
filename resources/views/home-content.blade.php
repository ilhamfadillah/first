  <head>
    <!--Load the AJAX API-->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

      // Load the Visualization API and the corechart package.
      google.charts.load('current', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.charts.setOnLoadCallback(drawChart);

      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChart() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([
          ['Cheetos', 5],
          ['Chitato', 10],
          ['Taro', 4],
          ['Coca-Cola', 20],
          ['Pepsi', 15],
          ['Sprite', 22]
        ]);

        // Set chart options
        var options = {'title':'Chart Laporan Penjualan',
                       'width':700,
                       'height':700};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
  </head>
    <!--Div that will hold the pie chart-->
    <style media="screen">
      .btn_add{
        margin-top: 25px;
      }
    </style>
<body>
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1><b>A</b>dmin<b>F</b>irst</h1>
      </section>

      <!-- Main content -->
      <section class="content">
        <div id="chart_div"></div>
      </section>
</body>
