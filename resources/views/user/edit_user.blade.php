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
    <div class="container">
      <h2 class="text-center">Edit User</h2>
      <div class="row">
        <div class="col-lg-4">
          <!--
          <form action="{{action('UserController@update')}}" method="post" name="edit_user" onclick="return fill()">
          -->
            {{ Form::open(array('url' => 'user', 'name' => 'edit_user', 'action' => 'UserController@update', 'id' => 'edit_user')) }}
            {{csrf_field()}}
            <input type="hidden" name="_method" value="PUT">
            <input type="hidden" name="id" value="{{ $user->id }}">
            <div class="form-group">
              <label for="username">Username</label>
              <input type="text" data-validation="length alphanumeric" data-validation-length="min4" name="username" class="form-control" placeholder="Enter Username" value="{{ $user->username }}">
              @if ($errors->has('username'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('username') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="text" data-validation-length="min6" name="password" class="form-control" placeholder="Enter password" value="{{ $user->password }}">
              @if ($errors->has('password'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group">
              <label for="email">E-mail</label>
              <input type="text" data-validation="email" name="email" class="form-control" placeholder="Enter Email" value="{{ $user->email }}">
              @if ($errors->has('email'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group">
              <label for="phone">Phone Number</label>
              <input type="text" data-validation="number" name="phone_number" class="form-control" placeholder="Phone Number" value="{{ $user->phone_number }}" onkeypress="return just_num(event)">
              @if ($errors->has('phone_number'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('phone_number') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group">
              <label for="role">Role</label>
              <input type="radio" name="role" id="r1" value="user" {{$user->role == 'user' ? 'checked' : ''}}>User
              <input type="radio" name="role" id="r2" value="admin" {{$user->role == 'admin' ? 'checked' : ''}}>Admin
              <span class="val"></span>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
          </form>
        </div>
      </div>
    </div>

    <script type="text/javascript">
    /*
      function fill(){
        var username = document.forms["edit_user"]["username"].value;
        var password = document.forms["edit_user"]["password"].value;
        var email = document.forms["edit_user"]["email"].value;
        var phone_number = document.forms["edit_user"]["phone"].value;
        var role = document.forms["edit_user"]["role"].value;
        var role_val;

        var val = document.getElementsByClassName('val');
        if (document.getElementById('r1').checked) {
          return false;
          rate_value = document.getElementById('r1').value;
        }
        if (document.getElementById('r2').checked) {
          return false;
          rate_value = document.getElementById('r2').value;
        }

        if(username==""){
          val[0].innerHTML = "Username is Empty";
          return false;
        }else{
          val[0].innerHTML = "";
        }

        if(password==""){
          val[1].innerHTML = "Password is Empty";
          return false;
        }else{
          val[1].innerHTML = "";
        }

        if(email==""){
          val[2].innerHTML = "Email is Empty";
          return false;
        }else{
          val[2].innerHTML = "";
        }

        if(phone_number==""){
          val[3].innerHTML = "Phone Number is Empty";
          return false;
        }else{
          val[3].innerHTML = "";
        }

        if(role==""){
          val[4].innerHTML = "<br>Role is Empty";
          return false;
        }else{
          val[4].innerHTML = "";
        }

        return true;
      }


      */
    </script>
@endsection
