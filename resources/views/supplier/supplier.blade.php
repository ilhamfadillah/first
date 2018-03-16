@extends('layouts.default')

@section('title', 'Supplier')

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
                    <td>

                      <a href="{{ action('SupplierController@edit', ['id' => $supplier->id]) }}" class="btn btn-primary">Edit</a>

                      <form class="delete" action="{{action('SupplierController@destroy')}}" method="post">
                        <button type="submit" class="btn btn-danger">Delete</button>
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

@endsection
