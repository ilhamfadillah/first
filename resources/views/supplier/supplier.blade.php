@extends('layouts.default')

@section('title', 'Supplier')
@section('jquery')
<script type="text/javascript">
$(document).ready(function() {
  $(".delete").click(function(event){
    var id = $(this).attr('supplier_id');
    alert(id);
    event.preventDefault();
    $( "#dialog" ).dialog({
        resizable: false,
        height: "auto",
        width: 400,
        modal: true,
        buttons: {
          "Delete all items": function() {
            $("#supplier-"+id).submit();


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

  <section class="content-header">

  </section>

  <section class="content">


    <div class="row">

      <div class="col-xs-12 text-right">
        <a href="{{ url('/admin/add/supplier') }}" class="btn btn-primary">
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
                    <th>Id</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($suppliers as $supplier)
                  <tr>
                    <td>{{ $supplier->id }}</td>
                    <td>{{ $supplier->name }}</td>
                    <td>{{ $supplier->address }}</td>
                    <td>{{ $supplier->phone }}</td>
                    <td class="text-center">

                      <form id="supplier-{{$supplier->id}}" action="{{action('SupplierController@destroy')}}" method="post">

                          <a href="{{ action('SupplierController@edit', ['id' => $supplier->id]) }}" class="btn btn-primary">Edit</a>

                        <button type="submit" class="btn btn-danger delete" supplier_id="{{$supplier->id}}">Delete</button>
                        {{csrf_field()}}
                        <input type="hidden" name="id" value="{{$supplier->id}}">
                        <input type="hidden" name="_method" value="delete">
                      </form>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
            </table>
            {{ $suppliers->links() }}
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
    </div>
  </section>
  <div id="dialog" title="Empty the recycle bin?" style="display: none;">
    <p><span class="ui-icon ui-icon-alert" style="float:left; margin:12px 12px 20px 0;"></span>These items will be permanently deleted and cannot be recovered. Are you sure?</p>
  </div>
@endsection
