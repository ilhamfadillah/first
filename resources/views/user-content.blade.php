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
                  <th>USERNAME</th>
                  <th>EMAIL</th>
                  <th>ALAMAT</th>
                  <th>PASSWORD</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>1</td>
                  <td>User 1</td>
                  <td>user1@user.com</td>
                  <td>Jl. User 1</td>
                  <td>usernumber1</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>User 2</td>
                  <td>user2@user.com</td>
                  <td>Jl. User 2</td>
                  <td>usernumber2</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>User 3</td>
                  <td>user3@user.com</td>
                  <td>Jl. User 3</td>
                  <td>usernumber3</td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>User 4</td>
                  <td>user4@user.com</td>
                  <td>Jl. User 4</td>
                  <td>usernumber4</td>
                </tr>
                <tr>
                  <td>5</td>
                  <td>User 5</td>
                  <td>user5@user.com</td>
                  <td>Jl. User 5</td>
                  <td>usernumber5</td>
                </tr>
                <tr>
                  <td>6</td>
                  <td>User 6</td>
                  <td>user6@user.com</td>
                  <td>Jl. User 6</td>
                  <td>usernumber6</td>
                </tr>
                <tr>
                  <td>7</td>
                  <td>User 7</td>
                  <td>user7@user.com</td>
                  <td>Jl. User 7</td>
                  <td>usernumber7</td>
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
