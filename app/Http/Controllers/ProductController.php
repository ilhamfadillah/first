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
        $products = Product::get();
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
    }

    public function edit($id)
    {
        // get the nerd
        $products = Product::find($id);

        // show the edit form and pass the nerd
        return View::make('product.edit_product')
            ->with('products', $products);
    }
}
