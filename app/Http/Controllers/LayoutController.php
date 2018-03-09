<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

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
        return view("latihan.index");
    }

    public function kedua()
    {
        return view("latihan.kedua");
    }
}
