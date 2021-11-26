<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\CartController;

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

Route::bind('product',function($slug){
    return App\Models\Product::where('slug',$slug)->first();
});
Route::get('/', StoreController::class);
Route::get('product/{slug}',[StoreController::class,'show']);
//carrito
Route::get('cart/show',[CartController::class,'show',]);
Route::get('cart/add/{product}',[CartController::class,'add']);
Route::get('cart/delete/{product}',[CartController::class,'delete']);
Route::get('cart/trash',[CartController::class,'trash']);
Route::get('cart/update/{product}/quantity',[
    'as'=>'cart-update',
    'uses'=>'CartController@update'
]);
