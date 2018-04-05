<?php

namespace App\Http\Controllers;

use Auth;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\StoreUser;
use App\Http\Requests\UpdateUser;

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

      if (Auth::user() == false){
        //var_dump(Auth::user());
        return redirect('login.login_content');
      }


        $users = User::paginate(10);
        return view("user.user")->with('users', $users);
    }

    public function login(Request $request)
    {

      //var_dump($request->all()); exit();
      //$this->middleware('guest')->except('logout');
      //$login = Auth::attempt(['username' => 'PoloVista', 'password' => 'secret']);

      //var_dump(auth::user()); exit();
      //var_dump($login); exit();

      //$login_user = Auth::attempt(['username' => 'user', 'password' => 'user']);

      $username = $request->post('username');
      $password = $request->post('password');
      $role = $request->post('role');


      //var_dump($username); exit();
      //validator = Validator::make(Input::all(), $users);
      $login = Auth::attempt(['username' => $username, 'password' => $password]);
      if($login){
          //var_dump(Auth::user()); exit();
          //exit('berhasil');
          //$user = Auth::user();
          return view('admin');
        }else{
          //var_dump($request->all()); exit();
          return view('login.login_content');
        }

    }

    public function logout()
    {
      Auth::logout();
      //exit();
      return redirect('/login');
    }

    public function store(StoreUser $request)
    {
        //var_dump($request->all()); exit();
        $users = new User;
        $users->username = $request->post('username');
        $users->password = $request->post('password');
        $users->email = $request->post('email');
        $users->phone_number = $request->post('phone_number');
        $users->role = $request->post('role');
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

    public function update(UpdateUser $request)
    {
        //var_dump($request->all());exit();
        $user = User::find($request->id);
        $user->username = $request->username;
        $user->password = $request->password;
        $user->email = $request->email;
        $user->phone_number = $request->phone_number;
        $user->role = $request->role;
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
