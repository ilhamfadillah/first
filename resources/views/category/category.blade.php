@extends('layouts.default')
@section('title', 'Category')
@section('jquery')
<script type="text/javascript">
$(document).ready(function() {
  $(".delete").click(function(event){
    var id = $(this).attr('category_id');
    alert(id);
    event.preventDefault();
    $( "#dialog" ).dialog({
        resizable: false,
        height: "auto",
        width: 400,
        modal: true,
        buttons: {
          "Delete all items": function() {
            $("#category-"+id).submit();


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

<section class="header">

</section>

<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <a href="{{ url('/admin/add/category') }}" class="btn btn-primary">	<span class="glyphicon glyphicon-plus">ADD
                </span>
            </a>
        </div>
        <div class="col-xs-6">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Hover Data Table
                    </h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example2" class="table table-bordered table-hover">{{csrf_field()}}
                        <thead>
                            <tr>
                                <th class="text-center">Id</th>
                                <th class="text-center">Category</th>
                                <th class="text-center" colspan="2">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($categories as $category)
                            <tr>
                                <td>{{ $category->id }}</td>
                                <td>{{ $category->category }}</td>
                                <td class="text-center">
                                    <a href="{{ action('CategoryController@edit', ['id' => $category->id]) }}" class="btn btn-primary">Edit</a>
                                </td>
                                <td class="text-center">
                                    <form id="category-{{$category->id}}" action="{{ action('CategoryController@destroy') }}" method="post">{{csrf_field()}}
                                        <button type="submit" class="btn btn-danger delete" category_id="{{$category->id}}">Delete</button>
                                        <input type="hidden" name="id" value="{{$category->id}}">
                                        <input type="hidden" name="_method" value="delete">
                                    </form>
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
    <div id="dialog" title="Empty the recycle bin?" style="display: none;">
    <p><span class="ui-icon ui-icon-alert" style="float:left; margin:12px 12px 20px 0;"></span>These items will be permanently deleted and cannot be recovered. Are you sure?</p>
  </div>
</section>
@endsection
