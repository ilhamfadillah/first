<?php

namespace App\Http\Controllers;

use DB;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;


class UserController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function index()
    {
        $users = User::get();
        return view("user.user")->with('users', $users);
    }

    public function store()
    {
      $users = DB::table('users')->insert([
          ['username' => 'ilham', 'votes'=>0],
          ['password' => '123', 'votes'=>0],
          ['email' => 'ilham@email.com'],
          ['phone_number' => '750555']
      ]);
      return view('user.user');

    }
}
