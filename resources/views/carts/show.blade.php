@extends('layouts.app')
@section('content')
    <div class="container my-2">
        <div x-data="{show: true}" x-init="setTimeout(() => show = false, 3000)" x-show="show">
            @if (session('status'))
         <div class="alert alert-success" style="border: 1px green ;height: 30px; padding:0 20px; background-color: rgb(165, 243, 165)">
            {{ session('status') }} 
         </div>
     @endif
     </div>
        <div class="row" style="justify-content: center">
                
            <h1 class="text-center">Complete this form</h1>
            <form action="{{ route('orders.store') }}" method="post">
            @csrf
            <div class="row text-center">

                <div class="col-md-6 my-2">
                  <input type="text" required name="user_name" placeholder="Enter your name" value="{{Auth::user()->name}}" id="">  
                </div><!-- 1 -->

                <div class="col-md-6 my-2">
                  <input type="text" required name="user_email" placeholder="Enter your Email" value="{{Auth::user()->email}}" id="">  
                </div><!-- 2 -->
            
                <div class="col-md-6 my-2">
                  <input type="number" required name="user_phone" placeholder="Enter your phone number" id="">  
                </div><!-- 3 -->

                <div class="col-md-6 my-2">
                  <input type="text" required name="user_city" placeholder="Enter your city" id="">  
                </div><!-- 4 -->
            
                <div class="col-md-6 my-2">
                  <input type="text" required name="user_adress" placeholder="Enter your adress" id="">  
                </div><!-- 5 -->

                <div class="col-md-6 my-2">
                    <div class="row">
                        <div class="col-9">
                         <input type="text" required  name="product_name"  value="{{$cart->product_name}}">
                    </div>
                   
                    <div class=" col-3 text-center">
                    <img src="{{$cart->image}}" style="height: 70px;" alt=""> 
                    </div> 
                    </div>
                     
                </div><!-- 6 -->

                <div class="col-md-6 my-2">
                    <input type="hidden" name="product_quantity" value="{{$cart->quantity}}" id="">  
                  </div><!-- 7-->

                <div class="col-md-6 my-2">
                    <input type="hidden" name="cost" value="{{$cart->price*$cart->quantity}}" id=""> 
                    <input type="hidden" name="product_image" value="{{$cart->image}}" id=""> 
                    
                  </div><!-- 8-->
                <div class="col-md-6 my-2  mx-auto">
                    <input type="date" required name="date"  id=""> 
                  </div><!-- 9-->
                  
                  <h1 >Total cost : {{$cart->price*$cart->quantity}}</h1>

                  <button type="submit" class="btn my-2" style="width: 200px; margin: 0 auto ">order now</button>

            </div><!-- row -->
            </form>
           
        </div><!-- row -->
    </div><!-- container -->
@endsection