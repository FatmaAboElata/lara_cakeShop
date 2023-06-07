<?php

namespace App\Http\Controllers;
use Auth;
use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $carts = Cart::where('user_id' , Auth::user()->id)->get();
        return view('carts.index' , compact('carts'));
    }

   
    public function store(Request $request)
    {
        Cart::create([
            'user_id'=>$request->user_id ,
            'user_name'=>$request->user_name ,
            'product_id'=>$request->product_id  ,
            'product_name'=>$request->product_name ,
            'image'=>$request->image ,
            'price'=>$request->price ,
            'quantity'=>$request->quantity ,
        ]);

        return redirect()->route('products.index')->with('status', 'Added succussfully!') ;
    }

    public function show(Cart $cart)
    {
        return view('carts.show' , compact('cart'));
    }

    
    public function destroy(Cart $cart)
    {
        //3 delete from table
        $cart->delete();
        // 4 
        return back()->with('status', 'cart canceled!'); 
    }
}
