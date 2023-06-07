<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/thanks', function () {
    return view('thanks');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/search', [App\Http\Controllers\ProductController::class, 'search'])->name('search');

Route::resources([
    'products' => App\Http\Controllers\ProductController::class,
    'carts' => App\Http\Controllers\CartController::class,
    'orders' => App\Http\Controllers\OrderController::class,
]);