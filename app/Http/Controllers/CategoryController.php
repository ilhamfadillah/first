<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use DB;
use Auth;
use App\User;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCategory;
use App\Http\Requests\UpdateCategory;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

      

      if (Auth::user() == false){
        return redirect('login');
        //exit('bukan user');
      }
        //exit();
        //$categories = Category::make();
        $categories = DB::table('categories')->get();
        return view('category.category')->with('categories', $categories);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategory $request)
    {
      //var_dump($request->all());exit();
      //var_dump($request->all());exit();
      $category = new Category;
      $category->category = $request->post('category');
      $category->save();
       //$data = ['data1','data2','data3'];
       //var_dump($_POST);
       return redirect('category');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::find($id);
        return view('category.category_edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCategory $request)
    {
        //var_dump($request->id); exit();
        $category = Category::find($request->id);
        $category->category = $request->category;
        
        $category->save();
        return redirect('category');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //var_dump($request->all()); exit();
        $category = Category::find($request->id);
        $category->delete();


        return redirect('category');

    }
//--------------------------------------------------------------------------
}
