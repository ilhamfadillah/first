@extends('layouts.default')

@section('title', 'Add Supplier')
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
@section('googlemap')
<script>
function initMap() {
  var spot = {lat: 39.273437, lng:  -101.841896};

  var map = new google.maps.Map(document.getElementById('mapx'), {
    zoom: 7,
    center: spot
  });

  var marker = new google.maps.Marker({
    position: spot,
    map: map
  });
}
</script>
@endsection
<style media="screen">
#mapx {
      height: 400px;
      width: 100%;
     }
</style>
@section('content')
    <section class="content-header">
      <h1 class="text-center">Add New Supplier</h1>
    </section>

    <section class="content">
      <div class="container">
        <div class="row">

          <div class="col-lg-4">

            {{ Form::open(array('url' => 'supplier', 'name' => 'add_supplier', 'onsubmit' => 'return fill()')) }}

              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" data-validation-length="min1" class="form-control" name="name" placeholder="Name">
                @if ($errors->has('name'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
                <span class="val"></span>
              </div>

              <div class="form-group">
                <label for="address">Address</label >
                <textarea name="address" data-validation-length="min4" class="form-control" rows="4" cols="80" placeholder="Address"></textarea>
                <span class="val"></span>
                @if ($errors->has('address'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('address') }}</strong>
                    </span>
                @endif
              </div>

              <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" data-validation="number" data-validation-length="min5" class="form-control" name="phone" placeholder="Phone Number" onkeypress="return just_num(event)">
                <span class="val"></span>
                @if ($errors->has('phone'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('phone') }}</strong>
                    </span>
                @endif
              </div>

              <input type="submit" name="" value="ADD" class="btn btn-primary">

            </form>
          </div>
          <div id="mapx"></div>

        </div>
      </div>
    </section>


    @endsection
