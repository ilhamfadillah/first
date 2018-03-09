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
        <div class="row">
          <div class="col-lg-6">
            <div id="chart_div"></div>
          </div>

          <div class="col-lg-1">

          </div>

          <section class="col-lg-4">
            <button type="button" name="btn_add_user">ADD USER</button>
            <button type="button" name="btn_add_product">ADD PRODUCT</button>

            <!-- Form Add Product -->
            <form class="" action="index.html" method="post">
              <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
              </div>
              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            <!-- /Form Add Product -->
          </section>
        </div>
      </section>
    </div>
</body>
