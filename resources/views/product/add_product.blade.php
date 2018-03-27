@extends('layouts.default')

@section('title', 'Add Product')
@section('jquery')
<script type="text/javascript">
function just_num(evt){
  var charCode = (evt.which) ? evt.which : event.keyCode
  if (charCode > 31 && (charCode < 48 || charCode > 57))
    return false;
  return true;
}

$(function() {
    // Multiple images preview in browser
    var imagesPreview = function(input, placeToInsertImagePreview) {

        if (input.files) {
            var filesAmount = input.files.length;

            for (i = 0; i < filesAmount; i++) {
                var reader = new FileReader();

                reader.onload = function(event) {
                    $($.parseHTML('<img width="100px">')).attr('src', event.target.result).appendTo(placeToInsertImagePreview);
                }

                reader.readAsDataURL(input.files[i]);
            }
        }

    };

    $('#imgInp').on('change', function() {
        imagesPreview(this, 'div.gallery');
    });
});
</script>
@endsection
@section('content')
<section class="content-header">

</section>

    <section class="content">
      <h2 class="text-center">Add New Product</h2>
      <div class="row">
        <div class="col-lg-4">
          {{ Form::open(array('url' => 'product', 'name' => 'add_product', 'onsubmit' => 'return fill()', 'enctype' => 'multipart/form-data')) }}
            <div class="form-group">
              <label for="product_name">Name</label>
              <input type="text" data-validation-length="min4" name="name" class="form-control" placeholder="Enter Produk">
            </div>

            <div class="form-group">
              <label for="product_price">Price</label>
              <input type="text" data-validation="number" name="price" class="form-control" placeholder="0" onkeypress="return just_num(event)">
            </div>

            <div class="form-group">
              <label for="product_stock">Stock</label>
              <input type="text" data-validation="number" name="stock" class="form-control" placeholder="0" onkeypress="return just_num(event)">
            </div>


            <div class="form-group">
                <label for="photo">Photo</label>
                <input type="file" name="photo" id="imgInp" multiple>
            </div>
            <div class="form-group">
              <div class="thumbnail">
                <div class="gallery"></div>
              </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>

          </form>
      </div>
  </section>
@endsection
