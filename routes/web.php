<?php

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/menu', function () {
    return view('function.menu');
});
Route::get('checkconnect',function(){
    if(DB::connection()->getDatabaseName())
    {
    return "Yes! successfully connected to the DB: " . DB::connection()->getDatabaseName();
    }else{
    return 'Connection False !!';
    }
    
   });
Route::get('/testproduct',function()
{
    $product = DB::table('products')->get();
    dd($product);
});
Route::resource('addproduct','ProductController');