<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>First -- Add -- User</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  </head>
  <body>
    <div class="container">
      <h2 class="text-center">Edit User</h2>
      <div class="row">
        <div class="col-lg-4">
          <form action="{{action('UserController@update')}}" method="post">
            {{csrf_field()}}
            <input type="hidden" name="_method" value="PUT">
            <input type="hidden" name="id" value="{{ $user->id }}">
            <div class="form-group">
              <label for="username">Username</label>
              <input type="text" name="username" class="form-control" placeholder="Enter Username" value="{{ $user->username }}">
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" name="password" class="form-control" placeholder="Enter password" value="{{ $user->password }}">
            </div>
            <div class="form-group">
              <label for="email">E-mail</label>
              <input type="text" name="email" class="form-control" placeholder="Enter Email" value="{{ $user->email }}">
            </div>
            <div class="form-group">
              <label for="phone">Phone Number</label>
              <input type="text" name="phone_number" class="form-control" placeholder="Phone Number" value="{{ $user->phone_number }}">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
          </form>
        </div>
      </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
