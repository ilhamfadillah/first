<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Tables
        <small>advanced tables</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Hover Data Table</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>NAMA</th>
                  <th>STOCK</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>pro1</td>
                  <td>Cheetos</td>
                  <td>10</td>
                </tr>
                <tr>
                  <td>pro2</td>
                  <td>Chitato</td>
                  <td>23</td>
                </tr>
                <tr>
                  <td>pro3</td>
                  <td>Taro</td>
                  <td>17</td>
                </tr>
                <tr>
                  <td>pro4</td>
                  <td>Coca-cola</td>
                  <td>31</td>
                </tr>
                <tr>
                  <td>pro5</td>
                  <td>Pepsi</td>
                  <td>29</td>
                </tr>
                <tr>
                    <td>pro6</td>
                    <td>Sprite</td>
                    <td>19</td>
                </tr>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
</body>
