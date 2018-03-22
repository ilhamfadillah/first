@extends('layouts.default')

@section('title', 'Add User')

@section('content')
    <div class="container">
      <h2 class="text-center">Tambah User</h2>
      <div class="row">
        <div class="col-lg-4">
          {{ Form::open(array('url' => 'user', 'name' => 'add_user', 'onsubmit' => 'return fill()')) }}
            <div class="form-group">
              <label for="username">Username</label>
              <input type="text" name="username" class="form-control" placeholder="Enter Username">
              <span class="val"></span>
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="text" name="password" class="form-control" placeholder="Enter password">
              <span class="val"></span>
            </div>
            <div class="form-group">
              <label for="email">E-mail</label>
              <input type="email" name="email" class="form-control" placeholder="Enter Email">
              <span class="val"></span>
            </div>
            <div class="form-group">
              <label for="phone_number">Phone Number</label>
              <input type="text" name="phone_number" class="form-control" placeholder="Enter Phone Number" onkeypress="return just_num(event)">
              <span class="val"></span>
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

    <script type="text/javascript">
      function fill(){
        var username = document.forms["add_user"]["username"].value;
        var password = document.forms["add_user"]["password"].value;
        var email = document.forms["add_user"]["email"].value;
        var phone_number = document.forms["add_user"]["phone_number"].value;
        var role = document.forms["add_user"]["role"].value;
        var val = document.getElementsByClassName('val');

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

        function just_num(evt){
          var charCode = (evt.which) ? evt.which : event.keyCode
          if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;
          return true;
        }
    </script>
@endsection
