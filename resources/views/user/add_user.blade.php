@extends('layouts.default')

@section('title', 'Add User')
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
      <h2 class="text-center">Tambah User</h2>
      <div class="row">
        <div class="col-lg-4">
          {{ Form::open(array('url' => 'user', 'name' => 'add_user', 'onsubmit' => 'return fill()')) }}
            <div class="form-group">
              <label for="username">Username</label>
              <input type="text" data-validation="length alphanumeric" data-validation-length="min4" name="username" class="form-control" placeholder="Enter Username">
              <span class="val"></span>
                @if ($errors->has('username'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="text" data-validation-length="min6" name="password" class="form-control" placeholder="Enter password">
              <span class="val"></span>
                @if ($errors->has('passwprd'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group">
              <label for="email">E-mail</label>
              <input type="email" data-validation="email" name="email" class="form-control" placeholder="Enter Email">
                @if ($errors->has('email'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
              <span class="val"></span>
            </div>
            <div class="form-group">
              <label for="phone_number">Phone Number</label>
              <input type="text" data-validation="number" name="phone_number" class="form-control" placeholder="Enter Phone Number" onkeypress="return just_num(event)">
              <span class="val"></span>
                @if ($errors->has('phone_number'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('phone_number') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group">
              <label for="role">Role</label>
              <input type="radio" name="role" value="user">User
              <input type="radio" name="role" value="admin">Admin
              <span class="val"></span>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>

@endsection
