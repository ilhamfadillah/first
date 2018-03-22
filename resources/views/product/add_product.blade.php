@extends('layouts.default')

@section('title', 'Add Product')

@section('content')
<section class="content-header">

</section>

    <section class="content">
      <h2 class="text-center">Add New Product</h2>
      <div class="row">
        <div class="col-lg-4">
          {{ Form::open(array('url' => 'product', 'name' => 'add_product', 'onsubmit' => 'return fill()')) }}
            <div class="form-group">
              <label for="product_name">Name</label>
              <input type="text" name="name" class="form-control" placeholder="Enter Produk">
              <span class="val"></span>
            </div>
            <div class="form-group">
              <label for="product_price">Price</label>
              <input type="text" name="price" class="form-control" placeholder="0" onkeypress="return just_num(event)">
              <span class="val"></span>
            </div>
            <div class="form-group">
              <label for="product_stock">Stock</label>
              <input type="text" name="stock" class="form-control" placeholder="0" onkeypress="return just_num(event)">
              <span class="val"></span>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
  </section>

  <script type="text/javascript">
    function fill(){
      var name = document.forms["add_product"]["name"].value;
      var price = document.forms["add_product"]["price"].value;
      var stock = document.forms["add_product"]["stock"].value;
      var val = document.getElementsByClassName('val');

      if(name==""){
        val[0].innerHTML = "Name is Empty";
        return false;
      }else{
        val[0].innerHTML = "";
      }

      if(price==""){
        val[1].innerHTML = "price is Empty";
        return false;
      }else{
        val[1].innerHTML = "";
      }

      if(stock==""){
        val[2].innerHTML = "Stock is Empty";
        return false;
      }else{
        val[2].innerHTML = "";
      }

      return true;
    }

      function just_num(evt){
        var charCode = (evt.which) ? evt.which : event.keyCode
        if (charCode > 31 && (charCode < 48 || charCode > 57))
          return false;
        return true;
      }
  </script>
@endsection
