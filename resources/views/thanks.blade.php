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
           
           <h1 class="text-center my-5" style="line-height: 90px; color: rgb(49, 43, 48)">Thanks alot being helpfull , You well recive your order after 2 or 3 days .</h1>
           <div class="text-center">
                <a href="/" class="btn mx-auto my-3">Home</a>
           </div>
        </div><!-- row -->
    </div><!-- container -->
@endsection