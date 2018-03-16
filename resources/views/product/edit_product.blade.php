@extends('layouts.default')

@section('title', 'Product')

@section('content')
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>First -- Add -- Product</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  </head>
  <body>
    <div class="container">
      <h2 class="text-center">Edit Produk</h2>
      <div class="row">
        <form class="" action="{{action('ProductController@update')}}" method="post">
          {{csrf_field()}}
          <input type="hidden" name="_method" value="PUT"/>
          <input type="hidden" name="id" value="{{ $product->id }}">
          <div class="col-lg-12">
            <div class="form-group">
              <div class="col-xs-6">
                <label for="product_name">Name</label>
                <input type="text" name="name" class="form-control" placeholder="Enter Product" value="{{ $product->name }}">
              </div>

              <div class="col-xs-6">
                <label for="product_stock">Price</label>
                <input type="number" name="price" class="form-control" placeholder="0" value="{{ $product->price }}">
              </div>

              <div class="col-xs-6">
                <label for="product_stock">Stock</label>
                <input type="number" name="stock" class="form-control" placeholder="0" value="{{ $product->stock }}">
              </div>
              <button type="submit" class="btn btn-primary">Update</button>
            </div>
          </div>
        </form>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

@endsection