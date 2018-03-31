<?php

namespace App\Http\Controllers;


use DB;
use Illuminate\Http\Request;
use App\Country;



class ChainboxController extends Controller

{

  public function index()
  {

      $countries = DB::table('countries')->get();
      return view("chainbox.chainbox", compact('countries'));
  }



/**

     * Show the application myform.

     *

     * @return \Illuminate\Http\Response

     */

    public function myform()

    {

    $countries = DB::table('countries')->pluck("name","id")->all();
    return view('myform',compact('countries'));

    }


    /**

     * Show the application selectAjax.

     *

     * @return \Illuminate\Http\Response

     */

    public function selectState(Request $request)
    {
      if($request->ajax()){
        $states = DB::table('states')->where('country_id',$request->country_id)->pluck("name","id")->all();
        return response()->json($states);
      }
    }

    public function selectCity(Request $request)
    {
      if($request->ajax()){
        $city = DB::table('cities')->where('state_id',$request->state_id)->pluck("name","id")->all();
        return response()->json($city);
      }
    }

}
