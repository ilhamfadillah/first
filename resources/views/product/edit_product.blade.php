@extends('layouts.default')

@section('title', 'Product')
@section('jquery')
  <script type="text/javascript">
  function just_num(evt){
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
      return false;
    return true;
    }
  </script>
@endsection
@section('content')

    <div class="container">
      <h2 class="text-center">Edit Produk</h2>
      <div class="row">
        <form class="" action="{{action('ProductController@update')}}" method="post" enctype="multipart/form-data">
          {{csrf_field()}}
          <input type="hidden" name="_method" value="PUT"/>
          <input type="hidden" name="id" value="{{ $product->id }}">
          <div class="col-lg-6">

              <div class="form-group">
                <label for="product_name">Name</label>
                <input type="text" data-validation-length="min4" name="name" class="form-control" placeholder="Enter Product" value="{{ $product->name }}">
              </div>

              <div class="form-group">
                <label for="product_stock">Price</label>
                <input type="text" data-validation="number" name="price" class="form-control" placeholder="0" value="{{ $product->price }}" onkeypress="return just_num(event)">
              </div>

              <div class="form-group">
                <label for="product_stock">Stock</label>
                <input type="text" data-validation="number" name="stock" class="form-control" placeholder="0" value="{{ $product->stock }}" onkeypress="return just_num(event)">
              </div>

              <div class="form-group">
                <label>Select Category :</label>
                <select class="form-control" name="category">
                  @foreach($categories as $category)
                  <option value="{{$category->id}}">{{ $category->category }}</option>
                  @endforeach
                </select>
              </div>

              <div class="form-group">
                  <label for="photo">Photo</label>
                  <input type="file" name="photo" id="imgInp" title="{{ $product->photo }}" enctype="multipart/form-data">
              </div>

              <div class="form-group">
                <div class="thumbnail">
                  <div class="gallery"></div>
                </div>
              </div>

              <button type="submit" class="btn btn-primary">Update</button>

            </div>
          </div>
        </form>
      </div>
    </div>

@endsection
