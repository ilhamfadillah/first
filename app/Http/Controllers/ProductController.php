<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Product;

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
}
