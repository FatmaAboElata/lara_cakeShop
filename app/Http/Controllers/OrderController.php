<?php

namespace App\Http\Controllers;
use Auth ;
use App\Models\Order;
use App\Models\Cart;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $orders = Order::where('user_name' , Auth::user()->name)->get();
        return view('orders.index' , compact('orders'));
    }

   
    public function store(Request $request )
    {
        Order::create([
            
            'user_name'=>$request->user_name ,
            'user_email'=>$request->user_email ,
            'user_phone'=>$request->user_phone ,
            'user_city'=>$request->user_city ,
            'user_adress'=>$request->user_adress ,
            'product_name'=>$request->product_name ,
            'product_image'=>$request->product_image ,
            'cost'=>$request->cost,
            'date'=>$request->date,
            'product_quantity'=>$request->product_quantity ,
        ]);

        return view('thanks')->with('status', 'ordered succussfully!') ;
    }


    public function destroy(Order $order)
    {
        //3 delete from table
        $order->delete();
        // 4 
        return back()->with('status', 'order canceled!');
    }
}
