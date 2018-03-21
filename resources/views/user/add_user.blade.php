@extends('layouts.default')

@section('title', 'Add User')

@section('content')
    <div class="container">
      <h2 class="text-center">Tambah User</h2>
      <div class="row">
        <div class="col-lg-4">
          {{ Form::open(array('url' => 'user')) }}
            <div class="form-group">
              <label for="username">Username</label>
              <input type="text" name="username" class="form-control" placeholder="Enter Username" required="true">
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" name="password" class="form-control" placeholder="Enter password" required="true">
            </div>
            <div class="form-group">
              <label for="email">E-mail</label>
              <input type="text" name="email" class="form-control" placeholder="Enter Email" required="true">
            </div>
            <div class="form-group">
              <label for="username">Phone Number</label>
              <input type="text" name="phone_number" class="form-control" placeholder="Enter Username" required="true"
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div
@endsection
