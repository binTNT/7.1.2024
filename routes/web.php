<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class,'index']);

Route::get('shop',[ShopController::class, 'index']);

Route::get('blog',function(){
    return view('blog');
});
Route::get('about',function(){
    return view('about');
});
Route::get('contact',function(){
    return view('contact');
});

Route::get('shop/detail/{id}',[ShopController::class,'detail']);

Route::get('cart',function(){
    return view('cart');
});

Route::get('/login',function(){
    return view('account.login');
});

Route::get('/register',function(){
    return view('account.register');
});
