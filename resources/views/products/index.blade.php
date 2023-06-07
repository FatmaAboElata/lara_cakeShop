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
        <div class="row">
            <h1 class="text-center py-3">Our Menu</h1>
            @foreach ($products as $product)
                 <div class="col-md-3 text-center">
                    <a class="magnific-popup" href="{{$product->image}}">
                        <img src="{{$product->image}}" style="height: 120 px;" alt="cake" class="galleryImg">
                        <div class="overlay">
                            <i class="fa-solid fa-magnifying-glass-plus icon icon-search-plus"></i>
                        </div><!--imgOverlay-->
                    </a>
                <h3 class="">{{$product->name}}</h3>
                <h3 style="color: red">{{$product->sale_price}}</h3>
                <a href="{{ route('products.show', $product->id) }}" class="my-1 btn ">Details</a>
                <form action="{{ route('carts.store') }}" method="post">
                    @csrf
                   @auth
                      <div class="col-5 d-flex">
                        <input type="hidden" name="user_name" class="w-25" value="{{Auth::user()->name}}" id="">
                        <input type="hidden" name="user_id" class="w-25" value="{{Auth::user()->id}}" id="">
                        <input type="hidden" name="product_id" class="w-25" value="{{$product->id}}" id="">
                        <input type="hidden" name="product_name" class="w-25" value="{{$product->name}}" id="">
                        <input type="hidden" name="image" class="w-25" value="{{$product->image}}" id="">
                        <input type="hidden" name="price" class="w-25" value="{{$product->sale_price}}" id="">
                       <input type="hidden" name="quantity" class="w-25" value="{{$product->quantity}}" id="">
                      </div>
                       <button type="submit" class="my-2 btn">Add to cart</button> 
                       @else
                       <a href="{{ route('login') }}" class="btn my-2" >Add to cart</a>
    
                   @endauth 
                   
    
                    
                   </form>
                </div><!-- col -->
            @endforeach
           
        </div><!-- row -->
    </div><!-- container -->
@endsection