@extends('layouts.app')
@section('content')

    <div class="container my-2">
         <div x-data="{show: true}" x-init="setTimeout(() => show = false, 3000)" x-show="show">
                @if (session('status'))
             <div class="alert alert-success" style="border: 1px green ;padding:0 20px; background-color: rgb(165, 243, 165)">
                {{ session('status') }} 
             </div>
         @endif
         </div>
         <div class="row">
           
            <div class="col-6 my-5">
                <a class="magnific-popup" href="{{$product->image}}">
                    <img src="{{$product->image}}" alt="cake" class="galleryImg">
                    <div class="overlay">
                        <i class="fa-solid fa-magnifying-glass-plus icon icon-search-plus"></i>
                    </div><!--imgOverlay-->
                </a>
            </div>
            <div class="col-6 my-5">
               <h1 >Cake name : <span style="color: rgb(145, 74, 96)">{{$product->name}}</span></h1> 
               <h3 class="my-2">inggrediant :  <span style="color: rgb(47, 24, 153)">{{$product->description}}</span></h3> 
               <h3 >price : <span style="text-decoration: line-through">{{$product->price}}</span> / <span style="color: rgb(236, 22, 22)">{{$product->sale_price}}</span> </h3> 
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
                    <label for="" style="color: black ; margin-right: 20px ; font-size: 20px">Quantity: </label>
                    <input type="text" name="quantity" class="w-25" value="{{$product->quantity}}" id="">
                  </div>
                   <button type="submit" class="my-3 btn">Add to cart</button> 
                   @else
                   <a href="{{ route('login') }}" class="btn" >Add to cart</a>

               @endauth 
               

                
               </form>
               
            </div>
           
           
        </div><!-- row -->
    </div><!-- container -->
@endsection