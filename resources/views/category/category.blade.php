@extends('layouts.default')

@section('title', 'Category')

@section('content')

  <section class="content-header">

  </section>

  <section class="content">

    <div class="row">

      <div class="col-xs-12 text-right">
        <a href="{{ url('/admin/add/category') }}" class="btn btn-primary">
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
                    <th>Product id</th>
                    <th>Name</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($categories as $category)
                  <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->product_id }}</td>
                    <td>{{ $category->name }}</td>
                    <td class="text-center">

                      <form class="delete" action="{{action('CategoryController@destroy')}}" method="post">

                        <a href="{{ action('CategoryController@edit', ['id' => $category->id]) }}" class="btn btn-primary">Edit</a>

                        <button type="submit" class="btn btn-danger" id="callconfirm">Delete</button>
                        {{csrf_field()}}
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
  </section>
@endsection
