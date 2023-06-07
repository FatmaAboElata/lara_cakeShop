<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    
    public function index()
    {
        $products = Product::all();
        return view('products.index' , compact('products'));
    }
    

    public function show(Product $product)
    {
        return view('products.show' , compact('product'));
    }

    public function search(Request $request )
    {
        $products = Product::where('name' , 'like' , '%'.$request->name.'%')->get();;
        return view('products.index' , compact('products'));
    }

}
