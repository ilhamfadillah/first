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
                <span class="val"></span>
              </div>

              <div class="form-group">
                <label for="address">Address</label >
                <textarea name="address" data-validation-length="min4" class="form-control" rows="4" cols="80" placeholder="Address"></textarea>
                <span class="val"></span>
              </div>

              <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" data-validation="number" data-validation-length="min5" class="form-control" name="phone" placeholder="Phone Number" onkeypress="return just_num(event)">
                <span class="val"></span>
              </div>

              <input type="submit" name="" value="ADD" class="btn btn-primary">

            </form>

          </div>

        </div>
      </div>
    </section>

    <script type="text/javascript">
      function fill(){
        var name = document.forms["add_supplier"]["name"].value;
        var address = document.forms["add_supplier"]["address"].value;
        var phone = document.forms["add_supplier"]["phone"].value;
        var val = document.getElementsByClassName('val');

        if(name==""){
          val[0].innerHTML = "Name is Empty";
          return false;
        }else{
          val[0].innerHTML = "";
        }

        if(address==""){
          val[1].innerHTML = "address is Empty";
          return false;
        }else{
          val[1].innerHTML = "";
        }

        if(phone==""){
          val[2].innerHTML = "phone is Empty";
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
