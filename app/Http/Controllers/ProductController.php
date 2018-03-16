<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;

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
        $products = Product::paginate(10);
        return view("product.product")->with('products', $products);

    }

    public function store(Request $request)
    {

       $product = new Product;
       $product->name = $request->post('name');
       $product->price = $request->post('price');
       $product->stock = $request->post('stock');
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
