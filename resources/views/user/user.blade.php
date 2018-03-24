@extends('layouts.default')

@section('title', 'User')
@section('jquery')
<script type="text/javascript">
$(document).ready(function() {
  $(".delete").click(function(event){
    var id = $(this).attr('user_id');
    alert(id);
    event.preventDefault();
    $( "#dialog" ).dialog({
        resizable: false,
        height: "auto",
        width: 400,
        modal: true,
        buttons: {
          "Delete all items": function() {
            $("#user-"+id).submit();


          },
          Cancel: function() {
            $( this ).dialog( "close" );
          }
        }
      });
    //$("form").submit(function(e){
      //e.preventDefault();

      });
    });
  //});

</script>
@endsection
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
        <a href="{{ url('/admin/add/user') }}" class="btn btn-primary">
          <span class="glyphicon glyphicon-plus">ADD</span>
        </a>
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
                  <th class="text-center">Email</th>
                  <th class="text-center">Phone Number</th>
                  <th class="text-center">Role</th>
                  <th class="text-center">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($users as $user)
                <tr>
                  <td class="text-center">{{ $user->id }}</td>
                  <td>{{ $user->username }}</td>
                  <td>{{ $user->email }}</td>
                  <td>{{ $user->phone_number }}</td>
                  <td>{{ $user->role }}</td>
                  <td class="text-center">
                    <form class="" id="user-{{$user->id}}" action="{{action('UserController@destroy')}}" method="post">
                      {{csrf_field()}}

                      <!--Button Edit-->
                      <a href="{{ action('UserController@edit', ['id' => $user->id]) }}"  name="edit" class="btn btn-info">
                        <span class="glyphicon glyphicon-pencil">Edit</span>
                      </a>

                      <!--Button Remove-->
                      <button type="submit" name="button" user_id="{{$user->id}}" class="btn btn-danger delete">
                        <span class="glyphicon glyphicon-remove">Delete</span>
                      </button>
                      <input type="hidden" name="id" value="{{$user->id}}">
                      <input type="hidden" name="_method" value="delete">
                    </form>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
            {{ $users->links() }}
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
    </div>
    </section>
    <div id="dialog" title="Empty the recycle bin?">
      <p><span class="ui-icon ui-icon-alert" style="float:left; margin:12px 12px 20px 0;"></span>These items will be permanently deleted and cannot be recovered. Are you sure?</p>
    </div>

    @endsection
