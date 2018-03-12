@extends('layouts.default')

@section('title', 'Product')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Data Product
    <small>Product List Stock</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Tables</a></li>
    <li class="active">Data Product</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-aqua">
        <div class="inner">
          <h3>
            @foreach($products as $product)
              @if($loop->first)
                {{$loop->count}}
              @endif
            @endforeach
          </h3>

          <p>Count Product</p>
        </div>
        <div class="icon">
          <i class="ion ion-bag"></i>
        </div>
        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>


    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-green">
        <div class="inner">
          <h3>
            @foreach($products as $product)  
              @if($loop->first)
                {{$product->sum('stock')}}
              @endif
            @endforeach
          </h3>
          <p>Stock Total</p>
        </div>
        <div class="icon">
          <i class="ion ion-stats-bars"></i>
        </div>
        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-xs-12 text-right">
      <button type="button" name="button" class="btn btn-primary">
        <span class="glyphicon glyphicon-plus">ADD</span>
      </button>
    </div>
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Table of Product</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="example2" class="table table-bordered table-hover">
            <thead>
              <tr>
                <th class="text-center">Id</th>
                <th class="text-center">Name</th>
                <th class="text-center">Price</th>
                <th class="text-center">Stock</th>
                <th class="text-center">Action</th>
            </thead>
          </tr>
            <tbody>
              @foreach($products as $product)
              <tr>
                <td class="text-center">{{ $product->id }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->stock }}</td>
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
  </section>

@endsection
