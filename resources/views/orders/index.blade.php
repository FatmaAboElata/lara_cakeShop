@extends('layouts.app')
@section('content')
    <div class="container my-2">
        <div x-data="{show: true}" x-init="setTimeout(() => show = false, 3000)" x-show="show">
            @if (session('status'))
         <div class="alert alert-success" style="border: 1px green 30px;padding:0 20px;  background-color: rgb(165, 243, 165)">
            {{ session('status') }} 
         </div>
     @endif
     </div>
        <div class="row" style="justify-content: center">
                
            <h1 class="text-center">{{Auth::user()->name}}'s orders</h1>
            <table class="table table-borderless text-center table-striped table-hover">
                <tr>
                    <th>User Name</th>
                    <th>User Email</th>
                    <th>Product Name</th>
                    <th>Product Image</th>
                    <th>Cost</th>
                    <th>Order Date</th>
                    <th>Canceled</th>
                </tr>
                @forelse ($orders as $order)
                <tr>
                    <td>{{Auth::user()->name}}</td>
                    <td>{{Auth::user()->email}}</td>
                    <td>{{$order->product_name}}</td>
                    <td><img src="{{$order->product_image}}" style="height: 50px;" alt=""></td>
                    <td>{{$order->cost}}</td>
                    <td>{{$order->date}}</td>
                    <form action="{{ route('orders.destroy',$order->id) }}" method="post">
                        @csrf
                        @method('DELETE')   
                        <td><button type="submit" class="btn my-1">Cancel</button></td>
                    </form>
                </tr>
                @empty
                <h1 class="text-center">You havn't orders yet .</h1> 
                <div class="text-center">
                    <a href="{{ route('products.index') }}" class="my-1 btn">menu</a>
                </div> 
                @endforelse
            </table> 
           
        </div><!-- row -->
    </div><!-- container -->
@endsection