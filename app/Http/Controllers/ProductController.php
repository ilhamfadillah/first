<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Product;
use App\Category;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */

     public function index()
    {
        //var_dump(Auth::user());exit();
        /*
        if (Auth::user() == false){
          return redirect('login');
          //exit('bukan user');
        }
        */

        $user = Auth::user();
        //var_dump($user->role); exit();


        if($user->role == 'user'){
          return redirect('admin');
        }


        $products = Product::paginate(10);
        return view("product.product")->with('products', $products);

    }

    public function store(Request $request)
    {

       $product = new Product;
       $product->name = $request->post('name');
       $product->price = $request->post('price');
       $product->stock = $request->post('stock');
       //$imageName = time().'.'.request()->image->getClientOriginalExtension();
        //request()->image->move(public_path('images'), $imageName);
        //var_dump($request->hasFile('photo'));exit();
        //$file = $request->file('photo');
        //var_dump($file->getClientOriginalExtension()); exit();
        //$file = $request->file('photo');
        //$path = $file->move('public/');
        //$path = $file->store('public/');
/*
        $file = File::create([
            'title' => "testing.jpg",
            'filename' => $path
        ]);
        exit;
*/

    $image = $request->file('photo');

      //$name = $file->getClientOriginalName();

    $destinationPath = public_path('/js');

    if (!$image->move($destinationPath, $image->getClientOriginalName())) {
      return 'Error saving the file.';
    }
    //var_dump($image->getClientOriginalName()); exit();
    $product->photo = 'js/' . $image->getClientOriginalName();
    //var_dump($product->photo = '/js/' . $image->getClientOriginalName()); exit();
    //var_dump($product->photo = $request->post($destinationPath, $image->getClientOriginalName())); exit();
    //exit;

        //var_dump($path); exit();
    $product->save();
        //$data = ['data1','data2','data3'];
        ///var_dump($_POST);
        return redirect('product');
    }

    public function edit($id)//for show data into form edit
    {
        //var_dump($id);exit(); <- for checking sending data
        // get the nerd
        $product = Product::find($id);

        // show the edit form and pass the nerd
        return view('product.edit_product',compact('product','id'));
    }

    public function update(Request $request)
    {
        //var_dump($request->all());exit();
        $product = Product::find($request->id);
        $product->name = $request->name;
        $product->price = $request->price;
        $product->stock = $request->stock;
        $product->photo = 'js/' . $image->getClientOriginalName();
        $product->save();
        return redirect('product');
    }

    public function destroy(Request $request)

    {
        //var_dump($request->all());exit();
        $product = Product::find($request->id);
        $product->delete();


        return redirect('product');

    }
}
