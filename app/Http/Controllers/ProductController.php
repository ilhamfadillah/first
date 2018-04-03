<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Product;
use App\Category;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\File;
use DB;
use Illuminate\Support\Facades\Storage;
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
        if (Auth::user() == false){
          return redirect('login');
        }

        $user = Auth::user();
        if($user->role == 'user'){
          return redirect('login');
        }

        $categories = Category::all();
        $products = Product::paginate(10);
        return view("product.product", compact('categories', 'products'));
    }

    public function add_product()
    {
      if (Auth::user() == false){
        return redirect('login');
      }

      $user = Auth::user();
      if($user->role == 'user'){
        return redirect('login');
      }
      $categories = Category::all();
      $products = Product::paginate(10);
      return view("product.add_product", compact('categories', 'products'));
    }

    public function store(Request $request)
    {
       $product = new Product;
       $product->name = $request->post('name');
       $product->price = $request->post('price');
       $product->stock = $request->post('stock');
       $product->category_id = $request->post('category');
       $product->category_name = $request->post('category');
       $image = $request->file('photo');
       $destinationPath = public_path('/js');
       if (!$image->move($destinationPath, $image->getClientOriginalName())) {
         return 'Error saving the file.';
       }
       $product->photo = 'js/' . $image->getClientOriginalName();
       $product->save();
            return redirect('product');
    }

    public function edit($id)
    {
        $product = Product::find($id);
        $categories = Category::all();
        return view('product.edit_product',compact('product','id', 'categories'));
    }

    public function update(Request $request)
    {

      File::delete(base_path('public/'+ $product->photo));
        $image = $request->file('photo');
        $product = Product::find($request->id);
        $product->photo = 'js/'.$image->getClientOriginalName();
        $product->name = $request->name;
        $product->price = $request->price;
        $product->stock = $request->stock;
        $product->category_id = $request->category;
        $product->save();
        return redirect('product');
    }

    public function destroy(Request $request)

    {
      $product = Product::find($request->id);
      $image = $request->file('photo');
      File::delete(public_path($product->photo));
      $product = Product::find($request->id);
      $product->delete();
      return redirect('product');
    }
}
