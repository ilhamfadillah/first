<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Auth;
use App\User;
class AdminController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function index()
    {

      if (Auth::user() == false){
        return redirect('login');
        //exit('bukan user');
      }
        //exit();
        $users = User::make();
        //var_dump(Auth::user());exit();
        return view("admin")->with('users', $users);
    }

    public function login()
    {
        return view("login.login_content");
    }

}
