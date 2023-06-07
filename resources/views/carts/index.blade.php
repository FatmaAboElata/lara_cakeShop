@extends('layouts.app')
@section('content')
    <div class="container my-2">
        <div x-data="{show: true}" x-init="setTimeout(() => show = false, 3000)" x-show="show">
            @if (session('status'))
         <div class="alert alert-success" style="border: 1px green ;height: 30px;padding:0 20px; background-color: rgb(165, 243, 165)">
            {{ session('status') }} 
         </div>
     @endif
     </div>
        <div class="row" style="justify-content: center">
            <h1 class="text-center py-3">{{Auth::user()->name}}'s carts </h1>
            @forelse ($carts as $cart)
                 <div class="col-md-6 text-center">
                    <a class="magnific-popup" href="{{$cart->image}}">
                        <img src="{{$cart->image}}" style="height: 80 px;" alt="cake" class="galleryImg">
                        <div class="overlay">
                            <i class="fa-solid fa-magnifying-glass-plus icon icon-search-plus"></i>
                        </div><!--imgOverlay-->
                    </a>
                 </div><!-- col 1-->

                 <div class="col-md-6 text-center my-5">
                    <h3 class="" style="color: rgb(165, 62, 113)"><span style="color: black ;">Name : </span>{{$cart->product_name}}</h3>
                    <h3 style="color: rgb(29, 212, 84)"><span style="color: black ;">Quantity : </span>{{$cart->quantity}} <span style="color: black ;"> Pieces</span></h3>
                <h3 style="color: red"><span style="color: black ;">Price : </span>{{$cart->price*$cart->quantity}}<span style="color: black ;"> L.E</span></h3>
                
                <a href="{{ route('products.show', $cart->product_id) }}" class="my-1 btn ">Details</a>
                <a href="{{ route('carts.show', $cart->id) }}" class="my-1 btn ">order now</a>
                <form action="{{ route('carts.destroy', $cart->id) }}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="my-1 btn">cancel</button>
            </form> 
                
                </div> <!-- col2 -->

                <hr style="text-align: center ; width: 180 ; margin: 20px ; color: black; font-size: 10px;">
                
            @empty
              <h1 class="text-center">You havn't carts yet .</h1> 
              <div class="text-center">
                <a href="{{ route('products.index') }}" class="my-1 btn">menu</a>
              </div>
                
            @endforelse 
                
            
           
        </div><!-- row -->
    </div><!-- container -->
@endsection