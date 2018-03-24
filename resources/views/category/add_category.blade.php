@extends('layouts.default')

@section('title', 'Main')

@section('content')
<section class="content-header">
  <h1 class="text-center">Add New Supplier</h1>
</section>

<section class="content">
  <div class="container">
    <div class="row">

      <div class="col-lg-4">

        {{ Form::open(array('url' => 'category', 'name' => 'add_category', 'onsubmit' => 'return fill()')) }}

          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" placeholder="Name">
            <span class="val"></span>
          </div>

          <div class="form-group">
            <label for="address">Address</label >
            <textarea name="address" class="form-control" rows="4" cols="80" placeholder="Address"></textarea>
            <span class="val"></span>
          </div>

          <div class="form-group">
            <label for="phone">Phone</label>
            <input type="text" class="form-control" name="phone" placeholder="Phone Number" onkeypress="return just_num(event)">
            <span class="val"></span>
          </div>

          <input type="submit" name="" value="ADD" class="btn btn-primary">

        </form>

      </div>

    </div>
  </div>
</section>
@endsection
