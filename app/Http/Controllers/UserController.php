<?php

namespace App\Http\Controllers;

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
        $users = User::paginate(10);
        return view("user.user")->with('users', $users);
    }

    public function store(Request $request)
    {
        //var_dump($request->all()); exit();
        $users = new User;
        $users->username = $request->post('username');
        $users->password = $request->post('password');
        $users->email = $request->post('email');
        $users->phone_number = $request->post('phone_number');
        $users->save();
        return redirect('user');
    }

    public function edit($id)//for show data into form edit
    {
        //var_dump($id);exit(); <- for checking sending data
        // get the nerd
        $user = User::find($id);

        // show the edit form and pass the nerd
        return view('user.edit_user',compact('user','id'));
    }

    public function update(Request $request)
    {
        //var_dump($request->all());exit();
        $user = User::find($request->id);
        $user->username = $request->username;
        $user->password = $request->password;
        $user->email = $request->email;
        $user->phone_number = $request->phone_number;
        $user->save();
        return redirect('user');
    }

    public function destroy(Request $request)

    {
        //var_dump($request->all());exit();
        $user = User::find($request->id);
        $user->delete();


        return redirect('user');

    }
}
