@extends('layouts.default')

@section('title', 'User')

@section('content')

  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Data User
      <small>List User Data</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Tables</a></li>
      <li class="active">Data tables</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12 text-right">
        <button type="button" name="button" class="btn btn-primary">
          <span class="glyphicon glyphicon-plus">ADD</span>
        </button>
      </div>
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
                  <th class="text-center">Id</th>
                  <th class="text-center">Username</th>
                  <th class="text-center">Password</th>
                  <th class="text-center">Email</th>
                  <th class="text-center">Phone Number</th>
                  <th class="text-center">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($users as $user)
                <tr>
                  <td class="text-center">{{ $user->id }}</td>
                  <td>{{ $user->username }}</td>
                  <td>{{ $user->password }}</td>
                  <td>{{ $user->email }}</td>
                  <td>{{ $user->phone_number }}</td>
                  <td class="text-center">
                    <!--Button Edit-->
                    <button type="button" name="button" class="btn btn-info">
                      <span class="glyphicon glyphicon-pencil">Edit</span>
                    </button>

                    <!--Button Remove-->
                    <button type="button" name="button" class="btn btn-danger">
                      <span class="glyphicon glyphicon-remove">Delete</span>
                    </button>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
    </div>
    </section>
@endsection
