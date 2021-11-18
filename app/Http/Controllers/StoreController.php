<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Product;

class StoreController extends Controller
{
    public function __invoke()
    {
        $products = Product::all();
        //dd($products);
        return view('store.index',compact('products'));
    }
    public function show($slug)
    {
        $product = Product::where('slug',$slug)->first();
        //dd($product);
        return view('store.show',compact('product'));
    }
}
