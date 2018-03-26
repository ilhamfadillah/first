@extends('layouts.default')

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

@section('title', 'Add User')

@section('content')

    <section class="content-header">
      <h1 class="text-center">Edit Supplier</h1>
    </section>

    <section class="content">
      <div class="container">
        <div class="row">

          <div class="col-lg-4">

            <form class="" action="{{ action('SupplierController@update') }}" method="post">

              {{csrf_field()}}
              <input type="hidden" name="_method" value="PUT"/>
              <input type="hidden" name="id" value="{{ $supplier->id }}">

              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" data-validation="length alphanumeric" data-validation-length="min4" class="form-control" name="name" placeholder="Name Supplier" value="{{ $supplier->name }}">
              </div>

              <div class="form-group">
                <label for="address">Address</label >
                <textarea name="address" data-validation="length alphanumeric" data-validation-length="min4" class="form-control" rows="4" cols="80" placeholder="Address">{{$supplier->address}}</textarea>
              </div>

              <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" data-validation="number" data-validation-length="min5" class="form-control" name="phone" placeholder="Phone Number" value="{{ $supplier->phone }}" onkeypress="return just_num(event)">
              </div>

              <input type="submit" name="" value="Update" class="btn btn-primary">

            </form>

          </div>

        </div>
      </div>
    </section>
@endsection
