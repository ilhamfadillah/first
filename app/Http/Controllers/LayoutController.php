<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;

class LayoutController extends Controller
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
        return view("latihan.index")->with('users', $users);;
    }

    public function kedua()
    {
        return view("latihan.kedua");
    }

    
}
