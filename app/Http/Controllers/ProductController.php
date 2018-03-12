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
        return view("product")->with('products', $products);
    }

    public function store(Request $request)
    {

       $product = new Product;
       $product->name = 'aqua';
       $product->price = '500';
       $product->stock = 12;
       $product->save();
        //$data = ['data1','data2','data3'];
        ///var_dump($_POST);
        exit();
    }
}
